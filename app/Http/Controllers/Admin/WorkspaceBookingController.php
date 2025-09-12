<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WorkspaceBooking;
use Illuminate\Http\Request;

class WorkspaceBookingController extends Controller
{
    public function index()
    {
        $workspaceBookings = WorkspaceBooking::latest()->paginate(15);
        return view('admin.workspace-bookings.index', compact('workspaceBookings'));
    }

    public function show(WorkspaceBooking $workspaceBooking)
    {
        return view('admin.workspace-bookings.show', compact('workspaceBooking'));
    }

    public function updateStatus(Request $request, WorkspaceBooking $workspaceBooking)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,cancelled,completed',
            'payment_status' => 'required|in:pending,paid,failed,refunded',
        ]);

        $workspaceBooking->update($validated);

        return redirect()->back()->with('success', 'Booking status updated successfully.');
    }
}