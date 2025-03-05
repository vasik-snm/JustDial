<?php

namespace App\Http\Controllers;

use App\Models\EnquiryInfo;
use Illuminate\Http\Request;

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
            'leadtype' => 'required|string',
            'prefix' => 'nullable|string|max:10',
            'name' => 'required|string',
            'mobile' => 'required|string|max:50',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email',
            'date' => 'required|date',
            'category' => 'required|string',
            'city' => 'required|string',
            'area' => 'required|string',
            'brancharea' => 'nullable|string',
            'dncmobile' => 'required|boolean',
            'dncphone' => 'required|boolean',
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
