<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    // Show the booking form
    public function create()
    {
        return view('form');
    }

    // Handle form submission
    public function store(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'brandName' => 'nullable|string|max:255',
            'appointmentDate' => 'required|date|after:+2 days',
            'appointmentTime' => 'required',
            'meetingType' => 'required|in:video,phone,in-person',
            'services' => 'required|array|min:1',
            'projectDescription' => 'required|string',
            'projectDeadline' => 'nullable|date',
            'budget' => 'nullable|string',
            'referral' => 'nullable|string',
            'additionalNotes' => 'nullable|string',
            'agreement' => 'required|accepted',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create the booking
        $booking = Booking::create([
            'full_name' => $request->fullName,
            'email' => $request->email,
            'phone' => $request->phone,
            'brand_name' => $request->brandName,
            'appointment_date' => $request->appointmentDate,
            'appointment_time' => $request->appointmentTime,
            'meeting_type' => $request->meetingType,
            'services' => json_encode($request->services),
            'project_description' => $request->projectDescription,
            'project_deadline' => $request->projectDeadline,
            'budget' => $request->budget,
            'referral' => $request->referral,
            'additional_notes' => $request->additionalNotes,
            'status' => 'pending',
        ]);

        // Send confirmation email (optional)
        // Mail::to($request->email)->send(new BookingConfirmation($booking));

        return redirect()->back()->with('success', 'Your appointment request has been submitted! We will contact you within 24 hours.');
    }
}