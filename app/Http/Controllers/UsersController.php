<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TalentCategory;
use App\Talent_Profile;
use App\User;
use App\InvestorProfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Auth;
use Image;
use App\Investor_Profile;
use App\UserCategory;
use App\Like;
use App\favourite;

class UsersController extends Controller
{
  
      /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
    
    
        public function admins()
        {
            
             $role_id=Auth::user()->user_category_id;
             $getCat = TalentCategory::all(); 
             $id=Auth::id();
            //  $all_admin= DB::table('users')->where('user_category_id','=',1)->count();
            //  $active_admin= DB::table('users')->where('user_category_id','=',1)->where('status','=','active')->count();
            //  $inactive_admin= DB::table('users')->where('user_category_id','=',1)->where('status','=','inactive')->count();            
    
                  $cat=DB::table('user_category')->get();
                  $role=DB::table('role')->get();
             $getApp= DB::table('app_setup')->where('app_setup.id','=', 1)->select('app_setup.app_url')->get();

             $admins= DB::table('users')->join('user_category','users.user_category_id','=','user_category.id')->join('role','users.role_id','=','role.id')->where('user_category_id','=',1)->get();
            
               
            return  view('admin-pages.admins')->with(['all_admin'=> $admins, 'app_url'=> $getApp[0], 'role'=> $cat, 'pos'=>$role]);
            // return view('home')->with(['getCat' => $getCat, 'all_admin'=> $all_admin, 'all_users'=> $all_users, 'guest_users'=>$guest_users, 'talent_users'=>$talent_users, 'talent_users'=>$talent_users, 'sponsor_users'=>$sponsor_users,]);
      }

      public function talents()
        {            
            // $talent_users= DB::table('users')->where('user_category_id','=',2)->count();
            // $sponsor_users= DB::table('users')->where('user_category_id','=',4)->count();
            $getApp= DB::table('app_setup')->where('app_setup.id','=', 1)->select('app_setup.app_url')->get();
            $talent_users= DB::table('users')->join('talent__profiles','users.id', 'talent__profiles.user_id')->where('users.user_category_id','=',2)->where('users.status', 'active')->select('users.*', 'talent__profiles.id as talent_id', 'talent__profiles.about as about_talent')->get();
            return  view('admin-pages.talents')->with(['talent' => $talent_users, 'app_url'=> $getApp[0],]);
            // return view('home')->with(['getCat' => $getCat, 'all_admin'=> $all_admin, 'all_users'=> $all_users, 'guest_users'=>$guest_users, 'talent_users'=>$talent_users, 'talent_users'=>$talent_users, 'sponsor_users'=>$sponsor_users,]);
      }

      public function guests()
        {            
            $getApp= DB::table('app_setup')->where('app_setup.id','=', 1)->select('app_setup.app_url')->get();
            $guest_users= DB::table('users')->where('user_category_id','=',3)->where('status', 'active')->get();
            return  view('admin-pages.guests')->with(['guest' => $guest_users, 'app_url'=> $getApp[0],]);
            // return view('home')->with(['getCat' => $getCat, 'all_admin'=> $all_admin, 'all_users'=> $all_users, 'guest_users'=>$guest_users, 'talent_users'=>$talent_users, 'talent_users'=>$talent_users, 'sponsor_users'=>$sponsor_users,]);
      }

      public function investors()
        {            
            $getApp= DB::table('app_setup')->where('app_setup.id','=', 1)->select('app_setup.app_url')->get();
            $sponsor_users= DB::table('users')->join('investor__profiles', 'users.id', 'investor__profiles.user_id')->where('users.user_category_id','=',4)->where('users.status', 'active')->select('users.*', 'investor__profiles.company_industry_category', 'investor__profiles.company_profile')->get();
            return  view('admin-pages.investors')->with(['sponsor' => $sponsor_users, 'app_url'=> $getApp[0],]);;
            // return view('home')->with(['getCat' => $getCat, 'all_admin'=> $all_admin, 'all_users'=> $all_users, 'guest_users'=>$guest_users, 'talent_users'=>$talent_users, 'talent_users'=>$talent_users, 'sponsor_users'=>$sponsor_users,]);
      }
    
}
