<?php

namespace App\Http\Controllers;
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

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function policy()
        {            
             
            return  view('admin-pages.policy');
            // return view('home')->with(['getCat' => $getCat, 'all_admin'=> $all_admin, 'all_users'=> $all_users, 'guest_users'=>$guest_users, 'talent_users'=>$talent_users, 'talent_users'=>$talent_users, 'sponsor_users'=>$sponsor_users,]);
      }

      public function aboutus()
      {            
           
          return  view('admin-pages.aboutus');
          // return view('home')->with(['getCat' => $getCat, 'all_admin'=> $all_admin, 'all_users'=> $all_users, 'guest_users'=>$guest_users, 'talent_users'=>$talent_users, 'talent_users'=>$talent_users, 'sponsor_users'=>$sponsor_users,]);
    }
}
