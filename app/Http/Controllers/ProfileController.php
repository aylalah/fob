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


class ProfileController extends Controller
{
   
    /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */


    public function admin_profile()
    {
        
         $role_id=Auth::user();
       
         if ($role_id->user_category_id == 1 && $role_id->role_id != 4) {
            $getUser = DB::table('users')->join('user_category','users.user_category_id','=','user_category.id')->join('role','users.role_id','=','role.id')->where('users.id','=',  $role_id->id)->get();
            
            // return $getUser;
            return view('admin-pages.user-profile')->with(['getUser' => $getUser[0]]);
         } else {
             
            $getCat = TalentCategory::all(); 
         $id=Auth::id();
         
        $user_cat= DB::table('user_category')->where('id','=',$role_id)->first();
        
            $invest=Investor_Profile::join('users','investor__profiles.user_id','=','users.id')
            ->select('investor__profiles.*', 'users.name', 'users.image','users.email','users.count_f')->where('user_id','=',$id)->first();

           $d=Talent_Profile::join('users','talent__profiles.user_id','=','users.id')
            ->select('talent__profiles.*', 'users.name', 'users.image','users.email','users.count_f')->where('user_id','=',$id)->first();

         if ($d) {
        $t_cat_id=$d->talent_category_id;
       
           $cat=Talent_Profile::orderBy('id','desc')->join('users','talent__profiles.user_id','=','users.id')
            ->select('talent__profiles.*', 'users.name', 'users.image','users.email','users.count_f')->where('talent_category_id','=',$t_cat_id)->simplePaginate(5);
       
        }else{
             $cat=Talent_Profile::orderBy('id','desc')->join('users','talent__profiles.user_id','=','users.id')
            ->select('talent__profiles.*', 'users.name', 'users.image','users.email','users.count_f')->simplePaginate(5); 
        }

        return view('home')->with(['getCat' => $getCat]);

         }      
         
        // return  view('admin-pages.user-profile');     
       
       
    }
}
