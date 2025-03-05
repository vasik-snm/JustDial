<?php

namespace App\Http\Controllers;
use App\Models\FollowUpInfo;
use App\Models\EnquiryInfo;
use App\Models\OrderInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserInfo;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.login');
    }

    public function login(Request $request)
    {
        // Validate input data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // dd($validator->passes());
        if ($validator->passes()) {
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
                // dd(Auth::guard('admin')->user());
                if (Auth::guard('admin')->user()->role != "admin") {
                    return redirect()->route('login')->with('error', 'Enter valid email or password...');
                }
                return redirect()->route('admin.dashboard')->with('success', 'Login successful!');
            } else {
                return redirect()->route('login')->with('error', 'Enter valid email or password...');
            }
        } else {
            return redirect()->route('login')->with('error', 'Enter valid email or password...');
        }
    }

    public function dashboard()
    {
        // Ensure only authenticated admins can access the dashboard
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('login')->with('error', 'Unauthorized access.');
        }

        // Count each status individually
        $pendingCount = EnquiryInfo::where('status', 'Pending')->count();
        $notConnectCount = EnquiryInfo::where('status', 'Not Connect')->count();
        $requestCallBackCount = EnquiryInfo::where('status', 'Request Call Back')->count();
        $followUpCount = EnquiryInfo::where('status', 'Follow Up')->count();
        $purposalSendCount = EnquiryInfo::where('status', 'Purposal Send')->count();
        $wonCount = EnquiryInfo::where('status', 'Won')->count();
        $cancelledCount = EnquiryInfo::where('status', 'Cancelled')->count();
        $rejectedCount = EnquiryInfo::where('status', 'Rejected')->count();
        $wrongCategoryCount = EnquiryInfo::where('status', 'Wrong Category')->count();
        $jobInternshipCount = EnquiryInfo::where('status', 'Job/Internship')->count();
        $marketingCount = EnquiryInfo::where('status', 'Marketing')->count();
        $totalLeadsCount = EnquiryInfo::count();

        // ✅ Today's Follow-ups count
        $todayFollowUpsCount = FollowUpInfo::whereDate('next_follow_up', Carbon::now('Asia/Kolkata'))->count();

        return view('Admin.index', compact(
            'pendingCount',
            'notConnectCount',
            'requestCallBackCount',
            'followUpCount',
            'purposalSendCount',
            'wonCount',
            'cancelledCount',
            'rejectedCount',
            'wrongCategoryCount',
            'jobInternshipCount',
            'marketingCount',
            'totalLeadsCount',
            'todayFollowUpsCount'
        ));
    }


    public function getAdminProfile($id)
    {
        $authenticatedAdmin = Auth::guard('admin')->user();

        if (!$authenticatedAdmin) {
            abort(404, 'Admin not found.');
        }

        if ($authenticatedAdmin->id != $id) {
            abort(403, 'Unauthorized action.');
        }

        $admin = User::findOrFail($id);

        return view('Admin.profile', compact('admin'));
    }

    public function updateAdminProfile(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        $admin = User::findOrFail($id);

        $admin->name = $validatedData['name'];
        $admin->email = $validatedData['email'];
        $admin->phone = $validatedData['phone'];

        if (!empty($validatedData['password'])) {
            $admin->password = Hash::make($validatedData['password']);
        }

        $admin->save();

        return redirect()->route('admin.profile.update', ['id' => $id])->with('success', 'Admin details updated successfully.');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
}
