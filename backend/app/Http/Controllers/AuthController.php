<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
// use App\Http\Controllers\AuthController;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','signup']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Email or password doesn\'t exist'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        $user= auth()->user();
        if ($user->status == 'active' ) {
            return response()->json([
                'ResponseCode' => 0,
                'Message' => 'Successfull',
                'Data' => DB::table('talent_profiles')->join('talent_category', 'talent_profiles.talent_category_id', '=', 'talent_category.id')->join('users', 'talent_profiles.user_id', '=', 'users.id')->where('talent_profiles.status', 'active')->where('users.id', auth()->user()->id)->select('talent_profiles.*','users.firstname','users.firstname','users.lastname','users.username','users.image','users.email','users.address', 'users.status as user_status', 'users.state','users.city','talent_category.cat_name')->first(),
                'ErrorResponse' => 'Active'
            ]);
        } if ($user->status == 'new' ) {
            return response()->json([
                'ResponseCode' => 0,
                'Message' => 'Activate your acount',
                'Data' => $user,
                'ErrorResponse' => 'New'
            ]);
        } if ($user->status == 'email' ){
            return response()->json([
                'ResponseCode' => 0,
                'Message' => 'Activate your acount',
                'Data' => $user,
                'ErrorResponse' => 'Inactive'
            ]);
        }
    }


    // public function me2()
    // {
    //     $user= auth()->user();
    //     if ($user->user_status == 'active' ) {
    //         return response()->json([
    //             'ResponseCode' => 0,
    //             'Message' => 'Successfull',
    //             'Data' => DB::table('talent_profiles')->join('talent_category', 'talent_profiles.talent_category_id', '=', 'talent_category.id')->join('users', 'talent_profiles.user_id', '=', 'users.id')->where('talent_profiles.status', 'active')->where('users.id', auth()->user()->id)->select('talent_profiles.*','users.firstname','users.firstname','users.lastname','users.username','users.image','users.email','users.address', 'users.status as user_status', 'users.state','users.city','talent_category.cat_name')->first(),
    //             'ErrorResponse' => 'Active'
    //         ]);
    //     }else{
    //         return response()->json([
    //             'ResponseCode' => 0,
    //             'Message' => 'Activate your acount',
    //             'Data' => $user,
    //             'ErrorResponse' => 'Inactive'
    //         ]);
    //     }

    // }

    public function signup(SignUpRequest $request)
    {
        $carbon = Carbon::now();
        $today_date = $carbon->toFormattedDateString();
        $add_time = $carbon->format('h:i:s A');

        $cot= sha1( $request->firstname.$today_date.$request->lastname.$add_time );

        $request->merge(["c_date" => $today_date]);
        $request->merge(["c_time" => $add_time]);
        $request->merge(["remember_token" => $cot]);
        $request->merge(["user_device" => $_SERVER['REMOTE_ADDR']]);
        $request->merge(["user_ip" => $_SERVER['HTTP_USER_AGENT']]);

        $user = User::create($request->all());
        return $this->login($request);
    }

    public function activatAccount($id)
    {

        $getSettings = DB::table('app_setup')->select('app_url', 'logo', 'app_name')->first();
        $path = $getSettings->app_url;
        $logo = $getSettings->logo;

        $getuser= User::where('id', auth()->user()->id)->first();
        $app = User::where('id', auth()->user()->id)->update(['user_category_id'=> $id, 'status'=> 'email']);
        if ($app) {

            // if ($id != 1) {
            //     $GLOBALS['email']=$getuser->email;
            //     $data = array('email'=>$GLOBALS['email'], 'name'=>$getuser->firstname.' '.$getuser->lastname, 'token'=>$getuser->remember_token, 'path'=> $path, 'logo'=> $logo);
            //     Mail::send('accountConfirmationMail', $data, function($message) {
            //        $message->to($GLOBALS['email'], 'New User')->subject('Welcome to FOB$TM');
            //        $message->from('admin@fopeogundero.com','noreply');
            //     });
            // }

            return response()->json([
                'ResponseCode' => 0,
                'Message' => 'Successfull',
                // 'Data' => $app,
                'ErrorResponse' => 'success'
            ]);
        } else{
                return response()->json([
                    'ResponseCode' => 0,
                    'Message' => 'Failed',
                    // 'Data' => $app,
                    'ErrorResponse' => 'Failed'
                ]);
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
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'user' => auth()->user()->name
        ]);
    }
}
