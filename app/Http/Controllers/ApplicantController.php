<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApplicantRequest;
use App\Models\Applicant;
use App\Models\Career;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ApplicantController extends Controller
{

    public function download($id): \Symfony\Component\HttpFoundation\StreamedResponse
    {
        $applicant = Applicant::findOrFail($id);
        $cvPath = $applicant->cv;
        // Check if the file exists
        if (!Storage::disk('public')->exists($cvPath)) {
            abort(404, 'File not found.');
        }

        return Storage::disk('public')->download($cvPath);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('dashboard.applicant.index',
            [
                'users' => User::all(),
                'careers' => Career::all(),
                'applicants' => Applicant::all(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApplicantRequest $request): \Illuminate\Http\RedirectResponse
    {
        if ($request->hasFile('cv')) {
            $cv = $request->file('cv');
            $cvPath = $cv->storeAs('applicants/cvs', $cv->getClientOriginalName(), 'public');
        } else {
            return back()->withErrors(['cv' => 'CV is required.']);
        }

        $application = Applicant::create([
            'career_id' => $request->input('career_id'),
            'user_id' => auth()->id(),
            'is_accepted' => $request->input('is_accepted', null),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'motivational_letter' => $request->input('motivational_letter'),
            'cv' => $cvPath,
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'phone_number' => $request->input('phone_number'),
            'birth_date' => $request->input('birth_date'),
        ]);

        return redirect()->route('career.show', $application->career_id)
            ->with('message', 'Application submitted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Applicant $applicant): View
    {
        return view('dashboard.applicant.edit',[
            'applicant' => $applicant,
            'careers' => Career::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): \Illuminate\Http\RedirectResponse
    {
        // Validate the is_accepted field
        $validatedData = $request->validate([
            'is_accepted' => 'nullable|in:0,1',
        ]);

        $applicant = Applicant::findOrFail($id);

        $applicant->update([
            'is_accepted' => $validatedData['is_accepted'],
        ]);

        return redirect()->route('applicant.index')->with('message', 'Applicant is updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Applicant $applicant): \Illuminate\Http\RedirectResponse
    {
        $applicant->delete();
        return redirect()->route('applicant.index')->with('message', 'Applicant is deleted');
    }
}
