<?php

namespace App\Http\Controllers;

use App\Mail\NewLeadNotification;
use App\Models\EnquiryInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function enquiryGenerate(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'leadid' => 'required|string',
            'leadtype' => 'nullable|string',
            'prefix' => 'nullable|string|max:10',
            'name' => 'nullable|string',
            'mobile' => 'nullable|string|max:50',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email',
            'date' => 'nullable|date',
            'category' => 'nullable|string',
            'city' => 'nullable|string',
            'area' => 'nullable|string',
            'brancharea' => 'nullable|string',
            'dncmobile' => 'nullable|boolean',
            'dncphone' => 'nullable|boolean',
            'company' => 'nullable|string',
            'pincode' => 'nullable|string|max:50',
            'time' => 'required',
            'branchpin' => 'nullable|string|max:50',
            'parentid' => 'nullable|string',
        ]);
        // dd($request->all(), $validatedData);

        // leadid check
        if (EnquiryInfo::where('leadid', $request->query('leadid'))->exists()) {
            return response()->json([
                'error' => 'LeadId already exists.'
            ], 409); // 409 Conflict status
        }

        // Create record
        $enquiry = EnquiryInfo::create($request->query());

        //Send email notification
        Mail::to('idigipie@gmail.com')->send(new NewLeadNotification($enquiry));

        return response()->json([
            'message' => 'Lead stored successfully!',
            'data' => $enquiry
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
