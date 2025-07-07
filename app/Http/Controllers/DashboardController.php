<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        $user = auth()->user();

        $recentUsers = (new \App\Models\User)->registeredUsersInPast72Hours();
        $recentAdmins = (new \App\Models\User)->registeredAdminsInPast72Hours();
        $roleModel = new Role();
        $userCounts = $roleModel->getUserCounts();
        $totalUsers = $roleModel->getTotalUsers();
        $userApplicationsCount = \App\Models\Applicant::countUserApplications();
        $applications = $user->applications()->with('career')->get();
        return view('dashboard.index', [
            'users' => User::take(5)->get(),
            'recentUsers' => $recentUsers,
            'recentAdmins' => $recentAdmins,
            'userCounts' => $userCounts,
            'roles' => Role::all(),
            'totalUsers' => $totalUsers,
            'user' => User::all(),
            'userApplicationsCount' => $userApplicationsCount,
            'applications' => $applications,
        ]);
    }
}
