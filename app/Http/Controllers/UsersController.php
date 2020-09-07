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
             $all_admin= DB::table('users')->where('user_category_id','=',1)->count();
             $active_admin= DB::table('users')->where('user_category_id','=',1)->where('status','=','active')->count();
             $inactive_admin= DB::table('users')->where('user_category_id','=',1)->where('status','=','inactive')->count();            
    
            
            $user_cat= DB::table('user_category')->where('id','=',$role_id)->first();

            $admins= DB::table('users')->join('user_category','users.user_category_id','=','user_category.id')->join('role','users.role_id','=','role.id')->where('user_category_id','=',1)->get();
            
               
            return  view('admin-pages.admins');
            // return view('home')->with(['getCat' => $getCat, 'all_admin'=> $all_admin, 'all_users'=> $all_users, 'guest_users'=>$guest_users, 'talent_users'=>$talent_users, 'talent_users'=>$talent_users, 'sponsor_users'=>$sponsor_users,]);
      }

      public function talents()
        {            
             
            return  view('admin-pages.talents');
            // return view('home')->with(['getCat' => $getCat, 'all_admin'=> $all_admin, 'all_users'=> $all_users, 'guest_users'=>$guest_users, 'talent_users'=>$talent_users, 'talent_users'=>$talent_users, 'sponsor_users'=>$sponsor_users,]);
      }

      public function guests()
        {            
             
            return  view('admin-pages.guests');
            // return view('home')->with(['getCat' => $getCat, 'all_admin'=> $all_admin, 'all_users'=> $all_users, 'guest_users'=>$guest_users, 'talent_users'=>$talent_users, 'talent_users'=>$talent_users, 'sponsor_users'=>$sponsor_users,]);
      }

      public function investors()
        {            
             
            return  view('admin-pages.investors');
            // return view('home')->with(['getCat' => $getCat, 'all_admin'=> $all_admin, 'all_users'=> $all_users, 'guest_users'=>$guest_users, 'talent_users'=>$talent_users, 'talent_users'=>$talent_users, 'sponsor_users'=>$sponsor_users,]);
      }
    
}
