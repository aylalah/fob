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
use App\Aboutus;
use App\Role;
use App\Team;
use App\PrivacyPolicy;
use App\TeamCondition;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function policy()
        {            
             $p= PrivacyPolicy::first();
            return  view('admin-pages.policy')->with('p',$p);
            // return view('home')->with(['getCat' => $getCat, 'all_admin'=> $all_admin, 'all_users'=> $all_users, 'guest_users'=>$guest_users, 'talent_users'=>$talent_users, 'talent_users'=>$talent_users, 'sponsor_users'=>$sponsor_users,]);
      }
public function teamcondition()
        {            
             $p= TeamCondition::first();
            return  view('admin-pages.teamcondition')->with('p',$p);
            // return view('home')->with(['getCat' => $getCat, 'all_admin'=> $all_admin, 'all_users'=> $all_users, 'guest_users'=>$guest_users, 'talent_users'=>$talent_users, 'talent_users'=>$talent_users, 'sponsor_users'=>$sponsor_users,]);
      }

      public function aboutus()
      {            
           $abt=Aboutus::first();
           $team=Team::orderBy('id','desc')->get();
          return  view('admin-pages.aboutus')->with('abt',$abt)->with('team',$team);
          // return view('home')->with(['getCat' => $getCat, 'all_admin'=> $all_admin, 'all_users'=> $all_users, 'guest_users'=>$guest_users, 'talent_users'=>$talent_users, 'talent_users'=>$talent_users, 'sponsor_users'=>$sponsor_users,]);
    }
    public function updateaboutus(Request $request)
    {
        // return $request;
         if ($request->hasFile('file')){
            
            $path=$request->file('file')->store('upload');
            // return $path;
             // $request->merge(['image' => $path]);
        DB::table('aboutuses')->where('id','=',$request->id)->update([
              'image' => $path]);
            // $user->save();
        }
        
         $request->merge(['created_by' => Auth::user()->name]);
            DB::table('aboutuses')->where('id','=',$request->id)->update([
              'heading' => $request->heading,
              'content'=>$request->content,
              'video'=>$request->video]);
       // Aboutus::update($request->all())->where('id',$request->id);
        return redirect('aboutus')->with('success','Successfully Updated');
    }
 public function add_team()
        {            
            $role=DB::table('role')->get();
            return  view('admin-pages.add_team')->with('role',$role);
            // return view('home')->with(['getCat' => $getCat, 'all_admin'=> $all_admin, 'all_users'=> $all_users, 'guest_users'=>$guest_users, 'talent_users'=>$talent_users, 'talent_users'=>$talent_users, 'sponsor_users'=>$sponsor_users,]);
      }
 public function storeteam(Request $request)
    {
        // return $request;
         if ($request->hasFile('file')){
            
            $path=$request->file('file')->store('upload');
            // return $path;
             $request->merge(['image' => $path]);
        
            // $user->save();
        }
        
         $request->merge(['created_by' => Auth::user()->name]);
      
       Team::create($request->all());
        return redirect('aboutus')->with('success','Successfully Updated');
    }
   public function updatepolicy(Request $request)
    {
        
        
         $request->merge(['created_by' => Auth::user()->name]);
            DB::table('privacy_policies')->where('id','=',$request->id)->update([
              'heading' => $request->heading,
              'content'=>$request->content,]);
       // Aboutus::update($request->all())->where('id',$request->id);
        return redirect('policy')->with('success','Successfully Updated');
    }
       public function updateterm(Request $request)
    {
       
        
         $request->merge(['created_by' => Auth::user()->name]);
            DB::table('team_conditions')->where('id','=',$request->id)->update([
              'heading' => $request->heading,
              'content'=>$request->content,]);
       // Aboutus::update($request->all())->where('id',$request->id);
        return redirect('termcondition')->with('success','Successfully Updated');
    }
}
