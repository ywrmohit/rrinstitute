<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $studentsCount = User::where('role', 'student')->count();
        $enquiriesCount = Enquiry::count();
        $recentEnquiries = Enquiry::latest()->take(5)->get();
        $newEnquiriesCount = Enquiry::where('status', 'new')->count();

        return view('institute.dashboard', compact('studentsCount', 'enquiriesCount', 'recentEnquiries', 'newEnquiriesCount'));
    }
}
