<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Validator;
use App\Eloq\User;
use App\Eloq\users;
use Hash;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserAuthController extends Controller
{
    public function signUpPage() {
        $binding = [
            'title' => 'Register',
    ];
        return view('auth.signUp', $binding);
    }

    public function signInPage() {
        $binding = [
            'title' => 'Login',
    ];
        return view('auth.signIn', $binding);
    }
    
    public function forgetPasswordPage() {
        $binding = [
            'title' => 'Password Reset',
    ];
        return view('auth.forgetPassword', $binding);
    }

    public function signUpProcess() {
        $input = request()->all();
        //var_dump($input);
        //exit;

        $rules = [
            'display' => ['required', 'in:Y,N'],
            'name'=> ['required', 'max:150', 'notIn:new user', ],
            'email'=> ['required', 'max:150', 'email', 'notIn:user@user', 'unique:users,email'],
            'password'=> ['required', 'same:password_confirmation', 'min:6', ],
            'password_confirmation' => ['required', 'min:6', ],
            'priv' => ['required', 'in:G,A'],
            'position' => ['required', 'in:FA,PG,UG,AG,AU'],
            ];
        
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            //var_dump($validator->messages());
            return redirect('/user/auth/sign-up')->withErrors($validator)->withInput();
            //var_dump($validator);
        }
            $input['password'] = Hash::make($input['password']);
            $Users = User::create($input);
            return redirect('/user/auth/sign-in');

            exit;
    }

    public function forgetPasswordProcess() {
        $input = request()->all();

        $rules = [
            'email' => ['required', 'max:150', 'email', ],
            'password' => ['required', 'min:6' ],

        ];
        
        $validator = Validator::make($input, $rules);
        if($validator->fails()) {
            return redirect('/user/auth/forgetpassword')->withErrors($validator)->withInput();
            //var_dump($validator);
        }

        try {
        $User = User::where('email',$input['email'])->firstOrFail();
        }
        catch(ModelNotFoundException $e){
            $errmsg = ['msg' => ['Email or Password Error'], ];
        }

        $input['password'] = Hash::make($input['password']);
            $User->update($input);
                echo "Profile password updated";
                return redirect('/user/auth/sign-in');
        exit;
        //var_dump($ispwcorrect);
        //var_dump($User);

    }

    public function signInProcess() {
        $input = request()->all();

        $rules = [
            'email' => ['required', 'max:150', 'email', ],
            'password' => ['required', 'min:6' ],
        ];
        
        $validator = Validator::make($input, $rules);
        if($validator->fails()) {
            return redirect('/user/auth/sign-in')->withErrors($validator)->withInput();
            //var_dump($validator);
        }

        try {
        $User = User::where('email',$input['email'])->firstOrFail();
        $ispwcorrect = Hash::check($input['password'],$User->password);
        }
        catch(ModelNotFoundException $e){
            $errmsg = ['msg' => ['Invalid Login'], ];
            $ispwcorrect = NULL;
        }

        if (!$ispwcorrect) {
            $errmsg = ['msg' => ['Email or Password Error'], ];
            return redirect('/user/auth/sign-in')->withErrors($errmsg)->withInput();
        }
        
        session()->put('user_id', $User->id);
        session()->put('user_priv', $User->priv);
        return redirect()->intended('/');
        exit;
        //var_dump($ispwcorrect);
        //var_dump($User);

    }

    public function signOut() {
        session()->forget('user_id');
        session()->forget('user_priv');
        return redirect()->intended('/');
        exit;
    }

}