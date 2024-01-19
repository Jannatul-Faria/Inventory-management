<?php

namespace App\Http\Controllers;

use App\Helpers\JWTToken;
use App\Mail\OTPMail;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function userLoginPage()
    {
        return view('backend.login');
    }

    public function varifyOtpPage(Request $request)
    {
        return view('backend.Pages.varifyOtp');
    }

    public function userRegister(Request $request)
    {

        try {
            // validation :
            $request->validate([
                'name' => 'required|string|max:50',
                'email' => 'required|email|unique:users,email|max:50',
                'mobile' => 'required|string|max:15',
                'class' => 'required|string|max:50',
                'password' => 'required|string|min:4',

                'address' => 'required|string|max:100',
                'state' => 'required|string|max:50',
                'zip' => 'required|string|max:10',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'gender' => 'required|in:male,female,other',
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = 'photo- '.md5(uniqid()).'.'.$image->getClientOriginalExtension();
                $image->move(public_path('assets/uploads'), $imageName);
            }

            User::create($request->all());

            return response()->json([
                'status' => 'success',
                'message' => 'Registration successful',

            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'failed',
                'message' => $e->getMessage(),

            ]);
        }

    }

    public function userLogin(Request $request)
    {
        $count = User::where('email', '=', $request->input('email'))
            ->where('password', '=', $request->input('password'))
            ->select('id')->first();

        if ($count !== null) {
            $token = JWTToken::createToken($request->input('email'), $count->id);

            return response()->json([
                'status' => 'success',
                'message' => 'User Login Successfully.',
                'token' => $token,
            ])->cookie('token', $token, 60 * 24 * 30);
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'unauthorize',
            ]);
        }
    }

    public function sendOtp(Request $request)
    {
        $email = $request->input('email');
        $otp = rand(1000, 9999);
        $count = User::where('email', '=', $email)->count();

        if ($count == 1) {
            Mail::to($email)->send(new OTPMail($otp));
            User::where('email', '=', $email)->update(['otp' => $otp]);

            return response()->json([
                'status' => 'success',
                'message' => 'Otp send successfully',
            ]);
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'unauthorize',
            ]);
        }
    }

    public function varifyOtp(Request $request)
    {
        $email = $request->input('email');
        $otp = $request->input('otp');
        $count = User::where('email', '=', $email)->where('otp', '=', $otp)->count();

        if ($count == 1) {
            User::where('email', '=', $email)->update(['otp' => '0']);
            $token = JWTToken::createTokenForPass($request->input('email'));

            return response()->json([
                'status' => 'success',
                'message' => 'User login successfully',
            ])->cookie('token', $token, 60 * 24 * 30);
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'unauthorize',
            ]);
        }
    }

    //  reset pass
    public function passwordReset(Request $request)
    {
        try {
            $email = $request->header('email');
            $password = $request->input('password');
            User::where('email', '=', $email)->update(['password' => $password]);

            return response()->json([
                'status' => 'success',
                'message' => 'request successfull',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'failed',
                'message' => 'something is wrong',
            ]);
        }
    }

    //logout
    public function logout(Request $request)
    {
        return redirect('/login')->cookie('token', '', -1);
    }

    public function userprofile(Request $request)
    {
        $email = $request->header('email');
        $user = User::where('email', '=', $email)->first();

        return response()->json([
            'status' => 'success',
            'message' => 'request successfull',
            'data' => $user,
        ]);
    }

    public function updateprofile(Request $request)
    {
        try {
            $email = $request->header('email');
            $name = $request->input('mobile');
            $class = $request->input('class');
            $mobile = $request->input('mobile');
            $password = $request->input('password');
            $address = $request->input('address');
            $state = $request->input('state');
            $zip = $request->input('zip');
            // $image=$request->input('image')
            $gender = $request->input('gender');

            User::where('email', '=', $email)->update([
                'name' => $name,
                'mobile' => $mobile,
                'class' => $class,
                'password' => $password,
                'address' => $address,
                'state' => $state,
                'zip' => $zip,
                'gender' => $gender,

            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'request successfull',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'failed',
                'message' => 'something is wrong',
            ]);
        }

    }
}
