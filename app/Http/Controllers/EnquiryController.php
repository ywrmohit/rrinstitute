<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Enquiry;

class EnquiryController extends Controller
{
    // Public: Store contact form submission
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'interest' => 'nullable|string|max:50',
            'message' => 'nullable|string',
        ]);

        Enquiry::create($validated);

        return back()->with('success', 'Your enquiry has been submitted successfully! We will contact you shortly.');
    }

    // Admin: List enquiries
    public function index(Request $request)
    {
        $query = Enquiry::query();

        // Status Filter
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Search Filter
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        $enquiries = $query->latest()->paginate(10)->withQueryString();

        return view('institute.enquiries.index', compact('enquiries'));
    }

    // Admin: Update status
    public function update(Request $request, Enquiry $enquiry)
    {
        $request->validate([
            'status' => 'required|in:new,contacted,resolved',
        ]);

        $enquiry->update(['status' => $request->status]);

        return back()->with('success', 'Enquiry status updated successfully.');
    }

    // Admin: Delete enquiry
    public function destroy(Enquiry $enquiry)
    {
        $enquiry->delete();

        return back()->with('success', 'Enquiry deleted successfully.');
    }
}
