<?php
   
   namespace App\Http\Controllers;

   use App\Http\Controllers\Controller;
   use Illuminate\Http\Request;
   use Illuminate\Support\Facades\Password;
   use Illuminate\Support\Facades\Validator;
   
   class ForgotPasswordController extends Controller
   {
       // Show the form to request a password reset link
       public function showForgotPasswordForm()
       {
           return view('forgotpassword');
       }
   
       // Handle the sending of the password reset link email
       public function sendResetLinkEmail(Request $request)
       {
           $validator = Validator::make($request->all(), [
               'email' => 'required|email',
           ]);
   
           if ($validator->fails()) {
               return response()->json(['status' => 'error', 'message' => 'Invalid email address'], 400);
           }
   
           $response = Password::sendResetLink($request->only('email'));
   
           if ($response == Password::RESET_LINK_SENT) {
               return response()->json(['status' => 'success', 'message' => 'Reset link sent']);
           } else {
               return response()->json(['status' => 'error', 'message' => 'Unable to send reset link'], 500);
           }
       }
   
       // Show the password reset form
       public function showResetForm($token)
       {
           return view('auth.passwords.reset', ['token' => $token]);
       }
   
       // Handle the password reset process
       public function reset(Request $request)
       {
           $validator = Validator::make($request->all(), [
               'token' => 'required',
               'email' => 'required|email',
               'password' => 'required|min:8|confirmed',
           ]);
   
           if ($validator->fails()) {
               return response()->json(['status' => 'error', 'message' => 'Invalid data provided'], 400);
           }
   
           $response = Password::reset(
               $request->only('email', 'password', 'password_confirmation', 'token'),
               function ($user, $password) {
                   $user->password = bcrypt($password);
                   $user->save();
               }
           );
   
           if ($response == Password::PASSWORD_RESET) {
               return response()->json(['status' => 'success', 'message' => 'Password has been reset']);
           } else {
               return response()->json(['status' => 'error', 'message' => 'Unable to reset password'], 500);
           }
       }
   }
   