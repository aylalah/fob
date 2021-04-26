<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['generalinfo','gettalentBaner','aboutus','talentcrew','getActivities','getInterview', 'getTalent', 'ourTeam']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function generalinfo()
    {
        $app = DB::table('app_setup')->get();
        return response()->json([
            'ResponseCode' => 0,
            'Message' => 'Processing Completed',
            'Data' => $app,
            'ErrorResponse' => 'success'
        ]);
    }

    public function gettalentBaner()
    {
        $app = DB::table('home_header')->get();
        return response()->json([
            'ResponseCode' => 0,
            'Message' => 'Processing Completed',
            'Data' => $app,
            'ErrorResponse' => 'success'
        ]);
    }

    public function aboutus()
    {
        $about = DB::table('aboutus')->first();
        return response()->json([
            'ResponseCode' => 0,
            'Message' => 'Processing Completed',
            'Data' => $about,
            'ErrorResponse' => 'success'
        ]);
    }

    public function ourTeam()
    {
        $teams = DB::table('team')->get();
        return response()->json([
            'ResponseCode' => 0,
            'Message' => 'Processing Completed',
            'Data' => $teams,
            'ErrorResponse' => 'success'
        ]);
    }

    public function talentcrew()
    {
        $crew = DB::table('talent_profiles')->join('talent_category', 'talent_profiles.talent_category_id', '=', 'talent_category.id')->join('users', 'talent_profiles.user_id', '=', 'users.id')->where('talent_profiles.status', 'active')->where('users.user_category_id', 2)->select('talent_profiles.*','users.firstname','users.firstname','users.lastname','users.username','users.image','users.email','users.address','users.state','users.city','talent_category.cat_name')->get();
        return response()->json([
            'ResponseCode' => 0,
            'Message' => 'Processing Completed',
            'Data' => $crew,
            'ErrorResponse' => 'success'
        ]);
    }

    public function getTalent($id)
    {
        $crew = DB::table('talent_profiles')->join('talent_category', 'talent_profiles.talent_category_id', '=', 'talent_category.id')->join('users', 'talent_profiles.user_id', '=', 'users.id')->where('talent_profiles.status', 'active')->where('talent_profiles.id', $id)->select('talent_profiles.*','users.firstname','users.firstname','users.lastname','users.username','users.image','users.email','users.address','users.state','users.city','talent_category.cat_name')->first();
        return response()->json([
            'ResponseCode' => 0,
            'Message' => 'Processing Completed',
            'Data' => $crew,
            'ErrorResponse' => 'success'
        ]);
    }

    public function getActivities()
    {
        $activities = DB::table('activities')->join('activities_category', 'activities.category_id', '=', 'activities_category.id')->join('users', 'activities.staff', '=', 'users.id')->where('activities.status', 'active')->select('activities.*','users.firstname','users.firstname','users.lastname','users.username','users.image as userImage','users.created_by','users.email','activities_category.category_name')->limit(6)->get();
        return response()->json([
            'ResponseCode' => 0,
            'Message' => 'Processing Completed',
            'Data' => $activities,
            'ErrorResponse' => 'success'
        ]);
    }

    public function getInterview()
    {
        $interviews = DB::table('interview')->where('interview.status', 'active')->select('interview.*')->get();
        return response()->json([
            'ResponseCode' => 0,
            'Message' => 'Processing Completed',
            'Data' => $interviews,
            'ErrorResponse' => 'success'
        ]);
    }
}
