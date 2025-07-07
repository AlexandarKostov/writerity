<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use HttpException;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
     * @throws HttpException
     */
    public function store(StoreContactRequest $request): \Illuminate\Http\RedirectResponse
    {

        if (Contact::where('email', $request->input('email'))->exists()) {
            // Throw a 403 Forbidden error
            throw new HttpException(403, 'This email is already in use.');
        }
        $contact = Contact::create([
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'message' => $request->input('message'),
        ]);

        return redirect()->route('home')->with('message', 'Thanks for this message');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
