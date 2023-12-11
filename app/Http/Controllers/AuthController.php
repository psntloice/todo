<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// app/Http/Controllers/AuthController.php

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function login(Request $request)
    {
       // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'login_type' => 'required|in:email,phone',
            'identifier' => [
                'required',
                Rule::when($request->input('login_type') === 'email', 'email'),
                Rule::when($request->input('login_type') === 'phone', ['regex:/^\+[0-9]{1,15}$/']),
            ],
            'password' => 'required|string',
        ]);

        // Check if validation fails
        if (Auth::attempt(['email' => $request->input('identifier'), 'password' => $request->input('password')]) ||
        Auth::attempt(['phone' => $request->input('identifier'), 'password' => $request->input('password')])) {
        // Authentication successful
            $token = Auth::user()->createToken('auth_token')->plainTextToken;
            $message = 'Validation successful';
            return response()->json(['token' => $token, 'message' => $message,]);
         } else {
        // Authentication failed
        throw new ValidationException($validator);
       // return redirect()->back()->withInput($request->only('identifier'))->withErrors(['identifier' => 'Invalid login credentials']);
            }      
    }
  
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            //'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'email' => 'sometimes|required|email|unique:users',
             'phone' => [
        'sometimes',
        'required',
        'unique:users',
        'regex:/^\+[0-9]{1,15}$/',
             ],
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
         'phone' => $this->formatPhoneNumber($request->input('phone')),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['token' => $token], 201);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Successfully logged out']);
    }
    private function formatPhoneNumber($phoneNumber)
{
    // You can implement custom logic to format the phone number as needed
    // For example, you might want to remove spaces, dashes, and other characters
    // Ensure it starts with '+'
    return '+' . preg_replace('/[^0-9]/', '', $phoneNumber);
}
}