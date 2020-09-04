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
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified'], ['except' => ['searchcandidate', 'talents', 'candidate','searchpartner','candidatedetail']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function candidate()
    {

        $talentCat = TalentCategory::all(); 
            $cand=Talent_Profile::orderBy('id','desc')->join('users','talent__profiles.user_id','=','users.id')
                    ->select('talent__profiles.*', 'users.name', 'users.image','users.email','users.count_f')->paginate(12); 
            return view('pages.candidate')->with('cand',$cand)->with('talentCat',$talentCat);
        }

        public function talents()
        {
    
            $talentCat = TalentCategory::all(); 
                $cand=Talent_Profile::orderBy('id','desc')->join('users','talent__profiles.user_id','=','users.id')
                        ->select('talent__profiles.*', 'users.name', 'users.image','users.email','users.count_f')->paginate(12); 
                return view('pages.talents')->with('cand',$cand)->with('talentCat',$talentCat);
            }

    public function index()
    {
        
         $role_id=Auth::user()->user_category_id;
         $getCat = TalentCategory::all(); 
         $id=Auth::id();
         $all_admin= DB::table('users')->where('user_category_id','=',1)->count();
         $all_users= DB::table('users')->where('user_category_id','!=',1)->count();
         $guest_users= DB::table('users')->where('user_category_id','=',3)->count();
         $talent_users= DB::table('users')->where('user_category_id','=',2)->count();
         $sponsor_users= DB::table('users')->where('user_category_id','=',4)->count();

        
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
        // return $cat;
        return view('home')->with('user',$user_cat)->with('d',$d)->with('invest',$invest)->with('cat',$cat)->with(['getCat' => $getCat, 'all_admin'=> $all_admin, 'all_users'=> $all_users, 'guest_users'=>$guest_users, 'talent_users'=>$talent_users, 'talent_users'=>$talent_users, 'sponsor_users'=>$sponsor_users,]);
       
       
    }
    public function register()
    {
        return view('auth.register');
    }

    public function getTalentCat(Request $request)
    {
        $talentCat = TalentCategory::all();    
        return view('auth.register-user',['getCat'=>$talentCat]);
    }

     public function registeruser(Request $request)
    {
        $id=Auth::id();

       $c=Talent_Profile::where('user_id','=',$id)->count();
       // $inv=Investor_Profile::where('user_id','=',$id)->count();
       // if ($inv == 0) {
         if ($c == 0) {  
 if ($request->hasFile('file')){
            $file=$request->file('file');
            $filename= time().'.'.$file->getClientOriginalExtension();
            Image::make($file)->resize(300, 300)->save(public_path('/upload/'.$filename));
              DB::table('users')->where('id','=',$id)->update([
      
       'image'=>$filename,

    ]);
            
        }
         DB::table('users')->where('id','=',$id)->update([
        'contact'=>$request->contact,
      'contact2'=>$request->chapter_id,
      'address_1'=>$request->address_1,
       'address_2'=>$request->address_2, 
       'state'=>$request->state,
       'city'=>$request->city,
       'user_category_id'=>$request->user_category_id,
       'country'=>$request->country,
       'username'=>'y'
       // 'image'=>$request->image,

    ]);
//            DB::table('talent_profile')->insert(
//         $request->all()
// );
         $request->merge(['user_id' => $id]);
       
        Talent_Profile::create($request->all());
        return redirect('home')->with('success','Saved');
        // return $request;
}
 else{
             return redirect('home')->with('success','Already Exist');
        }
       // }
       //  else{
       //       return redirect('home')->with('success','Already an Investor. Please,login or register with another email');
       //  }
       
    }
       public function registerstore(Request $request)
    {
        $id=Auth::id();
           // $c=Talent_Profile::where('user_id','=',$id)->count();
       $inv=Investor_Profile::where('user_id','=',$id)->count();
       // if ($c == 0) {
         if ($inv == 0) {  
      
           
         if ($request->hasFile('file')){
            $file=$request->file('file');
            $filename= time().'.'.$file->getClientOriginalExtension();
            Image::make($file)->resize(200, 200)->save(public_path('/upload/'.$filename));
           
            $request->merge(['logo' => $filename]);
        }

        // return $request;
        DB::table('users')->where('id','=',$id)->update([

       'user_category_id'=>$request->user_category_id,
       'image' =>$request->logo,
'username'=>'y'
    ]);
         $request->merge(['user_id' => $id]);
       
        Investor_Profile::create($request->all());
        return redirect('home')->with('success','Saved');
        // return $request;
        }
      else{
             return redirect('home')->with('success','Already Exist');
        }
       // }
       //  else{
       //       return redirect('home')->with('success','Already Exist. Please,login or register with another email');
       //  }
    }

      public function searchpartner(Request $request){
     $search=$request->search;
     $invest=Investor_Profile::query()->join('users','investor__profiles.user_id','=','users.id')
            ->select('investor__profiles.*', 'users.name', 'users.image','users.email','users.count_f')->where('company_industry_category','LIKE', "%{$search}%")
     // ->orWhere('email','LIKE', "%{$search}%")
    ->paginate(100);
    // return $dat;
    return view('pages.partners')->with('invest',$invest);
    }
     public function searchcandidate(Request $request){
         $talentCat = TalentCategory::all(); 
     $search=$request->search;
     $cand=Talent_Profile::query()->join('users','talent__profiles.user_id','=','users.id')
            ->select('talent__profiles.*', 'users.name', 'users.image','users.email','users.count_f')->where('name','LIKE', "%{$search}%")
     ->orWhere('skill_1','LIKE', "%{$search}%")
      ->orWhere('skill_2','LIKE', "%{$search}%")
       ->orWhere('skill_3','LIKE', "%{$search}%")
     ->paginate(100);
    // return $dat;
   return view('pages.candidate')->with('cand',$cand)->with('talentCat',$talentCat);
    }

       public function candidatedetail($id)
    {
   $talentCat = TalentCategory::all(); 
     $cand=Talent_Profile::orderBy('id','desc')->join('users','talent__profiles.user_id','=','users.id')
            ->select('talent__profiles.*', 'users.name', 'users.image','users.email','users.count_f')->where('talent_category_id','=',$id)->paginate(12); 
    return view('pages.candidate_category')->with('cand',$cand)->with('talentCat',$talentCat);
    }

      public function addlike(Request $request)
    {
        // return $request;
  $talent_id=$request->id;
  $t=Talent_Profile::where('id','=',$talent_id)->first();
  $user_id=Auth::id();

   $countlike=Like::where('user_id','=',Auth::id())->where('talent_id','=',$talent_id)->count();
   // return $t->count_like;
    $clike=Like::where('user_id','=',Auth::id())->where('talent_id','=',$talent_id)->first();
   // $u=Talent_Profile::where('id','=',$talent_id)->first();
   if ($t->user_id != $user_id) {

    if ($countlike==0) 
         {
       DB::table('likes')->insert([

        'talent_id'=>$talent_id,
        'user_id'=>$user_id,
        'status'=>'2'
        ]);
        DB::table('talent__profiles')->where('id','=',$talent_id)->update([

        'count_like'=>$t->count_like + 1
          ]);
         $t=Talent_Profile::where('id','=',$talent_id)->first();
         // return redirect('candidate');
        return $t->count_like;
         }

   else
         {
            // return $t->count_like-1 ;
             DB::table('likes')->where('id','=',$clike->id)->delete();

        DB::table('talent__profiles')->where('id','=',$talent_id)->update([

      'count_like'=>$t->count_like - 1
         ]);
         $t=Talent_Profile::where('id','=',$talent_id)->first();
        return $t->count_like;
        // return redirect('candidate');
        }
   }

   else{
    return "here";
         // return redirect('candidate');

   }
    }

     public function addfavour(Request $request)
    {
        // return $request;
  $f_user_id=$request->id;
  // $t=Talent_Profile::where('id','=',$talent_id)->first();
  $user_id=Auth::id();

   $countlike=favourite::where('user_id','=',Auth::id())->where('f_user_id','=',$f_user_id)->count();
   // return $t->count_like;
    $clike=favourite::where('user_id','=',Auth::id())->where('f_user_id','=',$f_user_id)->first();
   // $u=Talent_Profile::where('id','=',$talent_id)->first();
   if ($f_user_id != $user_id) {

    if ($countlike==0) 
         {
       DB::table('favourites')->insert([

        'f_user_id'=>$f_user_id,
        'user_id'=>$user_id,
        'status'=>'2'
        ]);
        // DB::table('talent__profiles')->where('id','=',$talent_id)->update([

        // 'count_like'=>$t->count_like + 1
        //   ]);
        //  $t=Talent_Profile::where('id','=',$talent_id)->first();
        return $user_id;
         }

   else
         {
            // return $t->count_like-1 ;
             DB::table('favourites')->where('id','=',$clike->id)->delete();

      //   DB::table('talent__profiles')->where('id','=',$talent_id)->update([

      // 'count_like'=>$t->count_like - 1
      //    ]);
      //    $t=Talent_Profile::where('id','=',$talent_id)->first();
      //   return $t->count_like;
                return $user_id;
        }
   }

   else{
    // return $t->count_like;
      return "done";

   }
    }

    public function favour(Request $request)
    {
 $role_id=Auth::user()->user_category_id;
         $id=Auth::id();
        $user= DB::table('user_category')->where('id','=',$role_id)->first();
    $cat=favourite::where('favourites.user_id','=',Auth::id())->join('users','favourites.f_user_id','=','users.id')
    ->join('talent__profiles','users.id','=','talent__profiles.user_id')
            ->select('favourites.id AS fav_id','favourites.user_id AS fav_user_id','favourites.f_user_id','favourites.status AS f_status','talent__profiles.*','users.id AS u_id','users.name', 'users.image','users.email','users.count_f')->get();
            // return $cat;
             return view('pages.favour')->with('user',$user)->with('cat',$cat);
    }
}
