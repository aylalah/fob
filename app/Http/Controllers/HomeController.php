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
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified'], ['except' => ['searchcandidate','searchpartner','candidatedetail']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
         $role_id=Auth::user()->user_category_id;
        
         $id=Auth::id();
        $user= DB::table('user_category')->where('id','=',$role_id)->first();
        
            $invest=Investor_Profile::join('users','investor__profiles.user_id','=','users.id')
            ->select('investor__profiles.*', 'users.name', 'users.image','users.email')->where('user_id','=',$id)->first();

           $d=Talent_Profile::join('users','talent__profiles.user_id','=','users.id')
            ->select('talent__profiles.*', 'users.name', 'users.image','users.email')->where('user_id','=',$id)->first();

         if ($d) {
        $t_cat_id=$d->talent_category_id;
       
           $cat=Talent_Profile::orderBy('id','desc')->join('users','talent__profiles.user_id','=','users.id')
            ->select('talent__profiles.*', 'users.name', 'users.image','users.email')->where('talent_category_id','=',$t_cat_id)->simplePaginate(5);
       
        }else{
             $cat=Talent_Profile::orderBy('id','desc')->join('users','talent__profiles.user_id','=','users.id')
            ->select('talent__profiles.*', 'users.name', 'users.image','users.email')->simplePaginate(5); 
        }
        // return $cat;
        return view('home')->with('user',$user)->with('d',$d)->with('invest',$invest)->with('cat',$cat);
       
       
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
       $inv=Investor_Profile::where('user_id','=',$id)->count();
       if ($inv == 0) {
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
       }
        else{
             return redirect('home')->with('success','Already an Investor. Please,login or register with another email');
        }
       
    }
       public function registerstore(Request $request)
    {
        $id=Auth::id();
           $c=Talent_Profile::where('user_id','=',$id)->count();
       $inv=Investor_Profile::where('user_id','=',$id)->count();
       if ($c == 0) {
         if ($inv == 0) {  
      
           
         if ($request->hasFile('file')){
            $file=$request->file('file');
            $filename= time().'.'.$file->getClientOriginalExtension();
            Image::make($file)->resize(300, 45)->save(public_path('/upload/'.$filename));
           
            $request->merge(['logo' => $filename]);
        }

        // return $request;
        DB::table('users')->where('id','=',$id)->update([

       'user_category_id'=>$request->user_category_id,
       'image' =>$request->logo

    ]);
         $request->merge(['user_id' => $id]);
       
        Investor_Profile::create($request->all());
        return redirect('home')->with('success','Saved');
        // return $request;
        }
      else{
             return redirect('home')->with('success','Already Exist');
        }
       }
        else{
             return redirect('home')->with('success','Already Exist. Please,login or register with another email');
        }
    }

      public function searchpartner(Request $request){
     $search=$request->search;
     $invest=Investor_Profile::query()->join('users','investor__profiles.user_id','=','users.id')
            ->select('investor__profiles.*', 'users.name', 'users.image','users.email')->where('company_industry_category','LIKE', "%{$search}%")
     // ->orWhere('email','LIKE', "%{$search}%")
    ->paginate(100);
    // return $dat;
    return view('pages.partners')->with('invest',$invest);
    }
     public function searchcandidate(Request $request){
         $talentCat = TalentCategory::all(); 
     $search=$request->search;
     $cand=Talent_Profile::query()->join('users','talent__profiles.user_id','=','users.id')
            ->select('talent__profiles.*', 'users.name', 'users.image','users.email')->where('name','LIKE', "%{$search}%")
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
            ->select('talent__profiles.*', 'users.name', 'users.image','users.email')->where('talent_category_id','=',$id)->paginate(12); 
    return view('pages.candidate_category')->with('cand',$cand)->with('talentCat',$talentCat);
    }
}
