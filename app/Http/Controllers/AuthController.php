<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\User;
use App\Profiles;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['login', 'signup', 'resendEmail', 'unlogProfile', 'activateAccount']]);
    // }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        
        $status = User::where('users.email', request(['email']))->select('users.*')->first();

        if ($status->status == 'active') {

                $credentials = request(['email', 'password', 'status']);

            if (!$token = auth()->attempt($credentials)) {
                return response()->json(['error' => 'Email or password does\'t exist'], 401);
            }

            return $this->respondWithToken($token);
            
        } else {
            return response()->json(['status' => 'Email not Autorised', 'message'=> $status->status, 'userId'=>$status->id]);
        }       
    }

    public function resendEmail($id)
    {
        $t_Date= date('sdmy');
        $status = User::where('users.id', $id)->select('users.*')->first();

        if ($status->status == 'active') {
            return response()->json(['status' => 'Email already Autorised', 'message'=> $status->status, 'userId'=>$status->id]);
        } else {

            $addUser = User::where('users.id', $id)->select('users.*')->first();
            $cot= sha1($status->name.$t_Date);            
            $addUser ->token = $cot;
            $addUser ->user_ip = $_SERVER['REMOTE_ADDR'];
            $addUser ->user_device = $_SERVER['HTTP_USER_AGENT'];
            $addUser ->updated_at = $t_Date;    

                $addUser->update();

            $GLOBALS['email']=$addUser->email;
            $data = array('email'=>$GLOBALS['email'], 'name'=>$addUser->name, 'token'=>$cot);
            Mail::send('mail_authentication', $data, function($message) {
               $message->to($GLOBALS['email'], 'new user')->subject('New account created on Autohub');
               $message->from('autohub@gmail.com','noreply');
            });
                if ( $data) {
                    
                    return '{
                        "success":true,
                        "message":"successful"
                    }' ;
                } else {
                    return '{
                        "success":false,
                        "message":"Failed"
                    }';
                }
        }
    }

    public function activateAccount($id)
    {
     
        $t_Date= date('sdmy');
        $status = User::where('users.remember_token', $id)->select('users.*')->first();

            $addUser = $status; 
            $addUser ->email_verified_at = $t_Date;              
            $addUser ->status = 'active';
            $addUser ->user_ip = $_SERVER['REMOTE_ADDR'];
            $addUser ->user_device = $_SERVER['HTTP_USER_AGENT'];
            $addUser ->updated_at = $t_Date;    

            $addUser->update();

        
                if ( $addUser) {
                    
                    return redirect('home')->with('success','Already Exist');
                } else {
                    return '{
                        "success":false,
                        "message":"Failed"
                    }';
                }
        
    }
    
    public function signup(Request $request)
    {    
       
        // $dt = Carbon::now();
        $t_Date= date('sdmy');
        $date = Carbon::now();
        $date= $date->toDateString();
        $getApp= DB::table('app_setup')->where('app_setup.id','=', 1)->select('app_setup.app_url')->get();
        $app_url= $getApp[0]->app_url;

            $addUser = new User;
            $cot= sha1($request->name.$t_Date);          
            $addUser ->role_id = 1;     
            $addUser ->user_category_id = 1;     
            $addUser ->password = Hash::make($request ->password);
            $addUser ->name = $request->name;
            $addUser ->email = $request->email;
            $addUser ->status = 'inactive';
            $addUser ->remember_token = $cot;
            $addUser ->user_ip = $_SERVER['REMOTE_ADDR'];
            $addUser ->user_device = $_SERVER['HTTP_USER_AGENT'];
            $addUser ->created_at = $t_Date;
            $addUser ->c_date = $date;  
            // $addUser ->c_time = $time;     
            
            // return $addUser;

                $addUser->save();
                return redirect('/')->with('success','Account Created');
                // if($addUser->save()){

                //    $GLOBALS['email']=$addUser->email;
                //     $data = array('email'=>$GLOBALS['email'], 'name'=>$addUser->name, 'token'=>$cot, 'app_url'=> $app_url, 'password'=>$request ->password);
                //     Mail::send('mail_authentication', $data, function($message) {
                //     $message->to($GLOBALS['email'], 'new user')->subject('New account created on Autohub');
                //     $message->from('support@fopeogundero.com','noreply');
                //     }); 

                //    return redirect('admins')->with('success','Already Exist');
                // } else {
                //     return '{
                //         "success":false,
                //         "message":"Failed"
                //     }';  
                // }    
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        $myId = auth()->user()->id;

        return Profiles::join('users', 'profile.user_id', 'users.id')->join('user_category', 'profile.category_id', 'user_category.id')->where('users.id', $myId)->select('users.*', 'category_name', 'user_category.id as cat_id')->first();
    }

    public function unlogProfile(Request $request)
    {
    
        $date = Carbon::now();
        $date= $date->toDateString();
       
            $updated= User::where('users.id', $request->id)->update([
              'name' => $request->name,
              'lastname'=>$request->lastname,
              'address_1'=>$request->address_1,
              'address_2'=>$request->address_2,
              'contact'=>$request->contact,
              'contact2'=>$request->contact2,
              'country'=>$request->country,
              'state'=>$request->state,
              'city'=>$request->city,
              'email'=>$request->email,
              'updated_by'=>Auth::user()->id,
              'user_device'=> $_SERVER['HTTP_USER_AGENT'],
              'user_ip'=>$_SERVER['REMOTE_ADDR'],     
              'updated_at'=> $date,   
              'updated_by'=>Auth::user()->name]);

        if ($updated) {
            if ($request->hasFile('file')){
            
                $path=$request->file('file')->store('upload');
                 // $path='here';
              // return $request->image_name=$path;
                $request->merge(['image' => $path]);
                // $user->save();
            }

            return redirect('myprofile')->with('success','Successfully Updated');
        } else {
            return redirect('myprofile')->with('Error','Faild');
        }
        

       // Aboutus::update($request->all())->where('id',$request->id);
       
    }

    public function updatePassword(Request $request)
    {
    
        $date = Carbon::now();
        $date= $date->toDateString();
       
            $updated= User::where('users.id', $request->id)->update([
              'password' => Hash::make($request->password),             
              'updated_by'=>Auth::user()->id,
              'user_device'=> $_SERVER['HTTP_USER_AGENT'],
              'user_ip'=>$_SERVER['REMOTE_ADDR'],     
              'updated_at'=> $date,   
              'updated_by'=>Auth::user()->name]);

        if ($updated) {
            return redirect('myprofile')->with('success','Successfully Updated');
        } else {
            return redirect('myprofile')->with('Error','Faild');
        }

    }


    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()->name,
            'message'=> auth()->user()->status
        ]);
    }
}
