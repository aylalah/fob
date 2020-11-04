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
use App\Activities;
use App\CompanyCategory;
use App\Gallery;
use App\ActGallery;
class ActivitiesController extends Controller
{

  public function index()
        {            
              $act=Activities::orderBy('id','desc')->join('company_categories','activities.category_id','=','company_categories.id')->select('activities.*','company_categories.category_name')->where('activities.status','=','active')->paginate(20);
              $g_image=ActGallery::orderBy('id','desc')->join('galleries','act_galleries.gallery_id','=','galleries.id')->join('activities','act_galleries.activities_id','=','activities.id')->select('act_galleries.*','activities.tittle','galleries.image_name')->where('galleries.image_type','=','image')->where('galleries.subject','=','activities')->get();
              $g_video=ActGallery::orderBy('id','desc')->join('galleries','act_galleries.gallery_id','=','galleries.id')->join('activities','act_galleries.activities_id','=','activities.id')->select('act_galleries.*','activities.tittle','galleries.image_name')->where('galleries.image_type','=','video')->where('galleries.subject','=','activities')->paginate(20);
              // return $g_image;
            return  view('admin-pages.activities')->with('act',$act)->with('g_image',$g_image)->with('g_video',$g_video);
            // return view('home')->with(['getCat' => $getCat, 'all_admin'=> $all_admin, 'all_users'=> $all_users, 'guest_users'=>$guest_users, 'talent_users'=>$talent_users, 'talent_users'=>$talent_users, 'sponsor_users'=>$sponsor_users,]);
      }
       public function add_activities()
    {
        //
         $cat=CompanyCategory::all();
         $act=Activities::all();
        return  view('admin-pages.add_activities')->with('cat',$cat)->with('act',$act);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeactivities(Request $request)
    {
    	// return $request->hasFile('file');
       // return $request;
    	 if ($request->hasFile('file')){
            
            $path=$request->file('file')->store('upload');
            // return $path;
             $request->merge(['image' => $path]);
       
            // $user->save();
        }
        
         $request->merge(['created_by' => Auth::user()->name]);
       Activities::create($request->all());
        return redirect('activities')->with('success','Successfully Saved');
    }
    public function storeactgallery(Request $request)
    {
       
    	 if ($request->hasFile('file')){
            
            $path=$request->file('file')->store('upload');
             // $path='here';
          // return $request->image_name=$path;
       $request->merge(['image_name' => $path]);
            // $user->save();
        }
        
        $request->merge(['created_by' => Auth::user()->name]);
        // return $request;
        $gall=Gallery::create($request->all());
         $request->merge(['gallery_id' => $gall->id]);
       ActGallery::create($request->all());
        return redirect('activities')->with('success','Successfully Saved');
    }


 public function edit_activities($id)
    {
       $acts= Activities::where('id',$id)->get();
       $cat=CompanyCategory::all();
    
      return  view('admin-pages.add_activities')->with('cat',$cat)->with('act',$acts);
        
    }
 public function updateactivities(Request $request)
    {
 // $request->merge(['created_by' => Auth::user()->name]);
            DB::table('activities')->where('id','=',$request->id)->update([
              'tittle' => $request->tittle,
              'content'=>$request->content,
              'updated_by'=>Auth::user()->name]);
       // Aboutus::update($request->all())->where('id',$request->id);
        return redirect('activities')->with('success','Successfully Updated');
}
public function delete_activities($id)
    {
       $acts= Activities::where('id',$id)->delete();
        return redirect('activities')->with('success','Successfully Delete');
    }
    public function delete_actg($id)
    {
       Gallery::where('id',$id)->delete();
       ActGallery::where('gallery_id',$id)->delete();
        return redirect('activities')->with('success','Successfully Delete');
    }
}
