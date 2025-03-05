<?php

namespace App\Http\Controllers;

use App\Models\EnquiryInfo;
use App\Models\FollowUpInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FollowUpController extends Controller
{
    public function enquiryList(Request $request)
    {
        $status = urldecode($request->input('status'));
        $todayFollowUps = $request->input('today_follow_ups');

        $enquiry_list = EnquiryInfo::when($status, function ($query) use ($status) {
            return $query->where('status', $status);
        })->when($todayFollowUps === 'today', function ($query) {
            return $query->whereHas('followUps', function ($q) {
                $q->whereDate('next_follow_up', Carbon::today());
            });
        })->orderBy('created_at', 'desc')->get();

        return view('Enquiry.enquiry_list', compact('enquiry_list', 'status', 'todayFollowUps'));
    }


    // public function updateStatus(Request $request)
    // {
    //     // dd($request->all());
    //     // Validate incoming request
    //     $request->validate([
    //         'enquiry_id' => 'required|exists:enquiry_infos,id',
    //         'status' => 'required|string',
    //         'date' => 'required|date',
    //         'notes' => 'nullable|string',
    //         'next_follow_up' => 'nullable|date',
    //     ]);

    //     // dd($request->all());

    //     // Get the latest follow-up record for the given enquiry_id
    //     $followUp = FollowUpInfo::where('enquiry_id', $request->enquiry_id)
    //         ->orderBy('id', 'desc')
    //         ->first();
    //         // dd($followUp);

    //     // Update or create follow-up record
    //     if ($followUp) {
    //         $followUp->update([
    //             'status' => $request->status,
    //             'date' => $request->date,
    //             'notes' => $request->notes,
    //             'next_follow_up' => $request->next_follow_up,
    //         ]);
    //     } else {
    //         FollowUpInfo::create([
    //             'enquiry_id' => $request->enquiry_id,
    //             'status' => $request->status,
    //             'date' => $request->date,
    //             'notes' => $request->notes,
    //             'next_follow_up' => $request->next_follow_up,
    //         ]);
    //     }

    //     // Update the status in the enquiry_infos table
    //     EnquiryInfo::where('id', $request->enquiry_id)
    //         ->update(['status' => $request->status]);

    //     return redirect()->back()->with('success', 'Status updated successfully!');
    // }

    public function updateStatus(Request $request)
    {
        // dd($request->all());
        // Validate incoming request
        $validatedData = $request->validate([
            'enquiry_id' => 'required|exists:enquiry_infos,id',
            'status' => 'required|string',
            'date' => 'required|date',
            'notes' => 'nullable|string',
            'next_follow_up' => 'nullable|date',
            'document' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048'
        ]);
        // dd($validatedData);

        // Handle file upload
        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('documents'), $fileName);
            $validatedData['document'] = $fileName;
        }

        // Create follow-up record
        FollowUpInfo::create($validatedData);

        // Update enquiry status
        EnquiryInfo::where('id', $validatedData['enquiry_id'])
            ->update(['status' => $validatedData['status']]);

        return redirect()->back()->with('success', 'New follow-up record added successfully!');
    }

    // public function showFollowUps($enquiryId)
    // {
    //     $enquiry_list = EnquiryInfo::with('latestFollowUp')->where('id', $enquiryId)->get();
    //     return view('FollowUps.followup_list', compact('enquiry_list'));
    // }

    public function showFollowUps($enquiryId)
    {
        $enquiry = EnquiryInfo::with(['followUps' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }])->find($enquiryId);

        if (!$enquiry) {
            return back()->with('error', 'Enquiry not found.');
        }

        $followUps = $enquiry->followUps;

        return view('FollowUps.followup_list', compact('followUps', 'enquiry'));
    }


    // public function showFollowUps($enquiryId)
    // {
    //     $enquiry = EnquiryInfo::with('followUp')->find($enquiryId);
    //     $followUps = $enquiry ? $enquiry->followUp : collect();
    //     return view('FollowUps.followup_list', compact('followUps', 'enquiry'));
    // }

    public function fetchEnquiries(Request $request)
    {
        $filter = $request->query('filter');

        $query = EnquiryInfo::query();

        switch ($filter) {

            case 'today':
                $query->whereDate('date', Carbon::today()->format('Y-m-d'));
                break;
            case 'yesterday':
                $query->whereDate('date', Carbon::yesterday()->format('Y-m-d'));
                break;
            case 'week':
                $query->where('date', '>=', Carbon::now()->subWeek()->format('Y-m-d'));
                break;
            case 'month':
                $query->where('date', '>=', Carbon::now()->subDays(29)->format('Y-m-d'));
                break;
            case 'year':
                $query->whereYear('date', Carbon::now()->year);
                break;
        }

        $enquiries = $query->orderBy('date', 'desc')->get();

        return response()->json($enquiries);
    }



    public function createEnquiry()
    {
        return view('Enquiry.add_enquiry');
    }

    public function enquiryRegister(Request $request)
    {
        // dd($request->all());
        // Validate incoming request data
        $validatedData = $request->validate([
            'leadid' => 'required|string|max:255',
            'leadtype' => 'required|string|max:255',
            'prefix' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'phone' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:255',
            'date' => 'required|date',
            'category' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'area' => 'nullable|string|max:255',
            'brancharea' => 'nullable|string|max:255',
            'dncmobile' => 'nullable|string|max:15',
            'dncphone' => 'nullable|string|max:15',
            'company' => 'nullable|string|max:255',
            'pincode' => 'nullable|string|max:10',
            'time' => 'nullable|string|max:255',
            'branchpin' => 'nullable|string|max:10',
            'parentid' => 'nullable|string|max:255',
            'status' => 'required|string|in:Not Connect,Request Call Back,Follow Up,Purposal Send,Won,Cancelled,Rejected,Wrong Category,Job/Intership,Marketing,Pending',
            'platform' => 'nullable|string|max:255',
        ]);
        // dd($validatedData);

        // Create new EnquiryInfo record using validated data
        EnquiryInfo::create($validatedData);

        // Redirect back with success message
        return redirect()->route('enquiryList')->with('success', 'New enquiry added successfully!');
    }
}
