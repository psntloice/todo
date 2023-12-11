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
      /*  $field = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'phone';

        $request->merge([$field => $request->input('login')]);

        $credentials = $request->only($field, 'password');

        if (auth()->attempt($credentials)) {
            //return $this->issueToken($request);
            $token = Auth::user()->createToken('auth_token')->plainTextToken;

            return response()->json(['token' => $token]);
        }

        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);

        return response()->json(['error' => 'Unauthorized'], 401);

        /* */

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

        if (Auth::attempt(['email' => $request->input('identifier'), 'password' => $request->input('password')]) ||
        Auth::attempt(['phone' => $request->input('identifier'), 'password' => $request->input('password')])) {
        // Authentication successful
        $token = Auth::user()->createToken('auth_token')->plainTextToken;

            return response()->json(['token' => $token]);
        return redirect()->intended('/dashboard'); // Redirect to the intended page after login
    } else {
        // Authentication failed
        throw new ValidationException($validator);
        return redirect()->back()->withInput($request->only('identifier'))->withErrors(['identifier' => 'Invalid login credentials']);
    }

        // Check if validation fails
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        else{
            $token = Auth::user()->createToken('auth_token')->plainTextToken;

            return response()->json(['token' => $token]);
        }
//trial data
/*{
  "login_type": "phone",
  //"login_type": "email",
 // "identifier": "mary@gmail.com",
  "identifier": "+254709581700",
  "password": "mukabwaloice"
}*/
        // If the validation passes, continue with your logic
        // ...

        // Return a success response
        return response()->json(['message' => 'Validation successful']);
    
/*
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
*/
      /*  if (Auth::attempt($request->only('email', 'password'))) {
            $token = Auth::user()->createToken('auth_token')->plainTextToken;

            return response()->json(['token' => $token]);
        }

        if (Auth::attempt($request->only('phone', 'password'))) {
            $token = Auth::user()->createToken('auth_token')->plainTextToken;

            return response()->json(['token' => $token]);
        }

        // Create a validator instance
$validator = Validator::make($request, $rules);

// Check if validation fails
if ($validator->fails()) {
    throw new ValidationException($validator);
}
        /*throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);*/
        //
    }

    //added theese
   

    // ... other methods ...

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|regex:/^\+[0-9]{1,15}$/',
            'password' => 'required|string',
        ], [
            $this->username() . '.regex' => 'Invalid phone number format.',
        ]);
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
   /* protected function attemptLogin(Request $request)
    {
        $field = filter_var($request->input($this->username()), FILTER_VALIDATE_INT)
            ? 'phone'
            : 'email';

        $request->merge([$field => $request->input($this->username())]);

        if ($this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        )) {
            return true;
        }

        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }
*/
    // ... other methods ...

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