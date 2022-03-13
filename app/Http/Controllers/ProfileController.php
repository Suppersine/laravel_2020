<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Validator;
use Intervention\Image\Facades\Image;
use App\Eloq\User;
use App\Eloq\users;
use App\Eloq\Awards;
use App\Eloq\Pubs;
use DB;
use Hash;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProfileController extends Controller {

    public function profileListPage() {
        $row_per_page = 10;
        $ProfilePaginate = User::OrderBy('updated_at', 'desc')
        ->where('display', 'Y') //only capture the one with display status Y
            ->paginate($row_per_page);
            $Awards = Awards::all();
            $Pub = Pubs::all();
            $Awardz = Awards::all();
            $Pubz = Pubs::all();

    //set photo url
    foreach ($ProfilePaginate as &$User) {
        if (!is_null($User->photo)) {
            $User->photo = url($User->photo);
        }
    }

    $binding = [
        'title' => 'Profile List',
        'ProfilePaginate'=> $ProfilePaginate,
        'Awards' => $Awards,
        'Pub' => $Pub,
        'Awardz' => $Awardz,
        'Pubz' => $Pubz,
    ];
    return view ('profile.listProfile', $binding);
   }

   public function profileListPageFA() {
    $row_per_page = 10;
    $ProfilePaginate = User::OrderBy('id', 'asc')
    ->where('display', 'Y')->where('position', 'FA') //only capture the one with display status Y & position FA
        ->paginate($row_per_page);
        $Awards = Awards::all();
        $Pub = Pubs::all();
        $Awardz = Awards::all();
        $Pubz = Pubs::all();

//set photo url
foreach ($ProfilePaginate as &$User) {
    if (!is_null($User->photo)) {
        $User->photo = url($User->photo);
    }
}

$binding = [
    'title' => 'Profile List ~ Faculty, Academics & Staff',
    'ProfilePaginate'=> $ProfilePaginate,
    'Awards' => $Awards,
    'Pub' => $Pub,
    'Awardz' => $Awardz,
    'Pubz' => $Pubz,
];
return view ('profile.listProfile', $binding);
}

public function profileListPagePG() {
    $row_per_page = 10;
    $ProfilePaginate = User::OrderBy('id', 'asc')
    ->where('display', 'Y')->where('position', 'PG') //only capture the one with display status Y & position PG
        ->paginate($row_per_page);
        $Awards = Awards::all();
        $Pub = Pubs::all();
        $Awardz = Awards::all();
        $Pubz = Pubs::all();

//set photo url
foreach ($ProfilePaginate as &$User) {
    if (!is_null($User->photo)) {
        $User->photo = url($User->photo);
    }
}

$binding = [
    'title' => 'Profile List ~ Postgraduate Students',
    'ProfilePaginate'=> $ProfilePaginate,
    'Awards' => $Awards,
    'Pub' => $Pub,
    'Awardz' => $Awardz,
    'Pubz' => $Pubz,
];
return view ('profile.listProfile', $binding);
}

public function profileListPageUG() {
    $row_per_page = 10;
    $ProfilePaginate = User::OrderBy('id', 'asc')
    ->where('display', 'Y')->where('position', 'UG') //only capture the one with display status Y & position UG
        ->paginate($row_per_page);
        $Awards = Awards::all();
        $Pub = Pubs::all();
        $Awardz = Awards::all();
        $Pubz = Pubs::all();

//set photo url
foreach ($ProfilePaginate as &$User) {
    if (!is_null($User->photo)) {
        $User->photo = url($User->photo);
    }
}

$binding = [
    'title' => 'Profile List ~ Undergraduate Students',
    'ProfilePaginate'=> $ProfilePaginate,
    'Awards' => $Awards,
    'Pub' => $Pub,
    'Awardz' => $Awardz,
    'Pubz' => $Pubz,
];
return view ('profile.listProfile', $binding);
}

public function profileListPageAG() {
    $row_per_page = 10;
    $ProfilePaginate = User::OrderBy('id', 'asc')
    ->where('display', 'Y')->where('position', 'AG') //only capture the one with display status Y & position AG
        ->paginate($row_per_page);
        $Awards = Awards::all();
        $Pub = Pubs::all();
        $Awardz = Awards::all();
        $Pubz = Pubs::all();

//set photo url
foreach ($ProfilePaginate as &$User) {
    if (!is_null($User->photo)) {
        $User->photo = url($User->photo);
    }
}

$binding = [
    'title' => 'Profile List ~ Postgraduate Alumni',
    'ProfilePaginate'=> $ProfilePaginate,
    'Awards' => $Awards,
    'Pub' => $Pub,
    'Awardz' => $Awardz,
    'Pubz' => $Pubz,
];
return view ('profile.listProfile', $binding);
}

public function profileListPageAU() {
    $row_per_page = 10;
    $ProfilePaginate = User::OrderBy('id', 'asc')
    ->where('display', 'Y')->where('position', 'AU') //only capture the one with display status Y & position AU
        ->paginate($row_per_page);
        $Awards = Awards::all();
        $Pub = Pubs::all();
        $Awardz = Awards::all();
        $Pubz = Pubs::all();

//set photo url
foreach ($ProfilePaginate as &$User) {
    if (!is_null($User->photo)) {
        $User->photo = url($User->photo);
    }
}

$binding = [
    'title' => 'Profile List ~ Undergraduate Alumni',
    'ProfilePaginate'=> $ProfilePaginate,
    'Awards' => $Awards,
    'Pub' => $Pub,
    'Awardz' => $Awardz,
    'Pubz' => $Pubz,
];
return view ('profile.listProfile', $binding);
}

   public function profileCreatePage() {
    $binding = [
        'title' => 'Create Profile',
];
    return view('profile.createProfile', $binding);
}

   public function profileCreateProcess() {

    $input = request()->all();
    //var_dump($input);
    //exit;
        $User = User::create($input);

        return redirect('/user/profile/'. $User->id . '/edit_n');

}

   public function profileUserPage($user_id) {
    $User = User::findOrFail($user_id);
    $Awards = Awards::all();
    $Pub = Pubs::all();
    $Awardz = Awards::all();
    $Pubz = Pubs::all();

    if (!is_null($User->photo)) {
        $User->photo = url($User->photo);
    }

    $binding = [
         'title' => $User->name,
         'User' => $User,
         'Awards' => $Awards,
         'Pub' => $Pub,
         'Awardz' => $Awardz,
         'Pubz' => $Pubz,
    ];
    return view('profile.showProfile', $binding);
}

public function profileUserEditPageA($user_id) {
    $User = User::findOrFail($user_id);

    if (!is_null($User->photo)) {
        $User->photo = url($User->photo);
    }

    $binding = [
         'title' => 'Profile Edit as Admin',
         'User' => $User,
    ];
    return view('profile.editProfileA', $binding);
}


public function profileUserEditPageN($user_id) {
    $User = User::findOrFail($user_id);

    if (!is_null($User->photo)) {
        $User->photo = url($User->photo);
    }

    $binding = [
         'title' => 'Add a new profile as Admin',
         'User' => $User,
    ];
    return view('profile.editProfileN', $binding);
}

public function profileUserEditPageG($user_id) {
    $User = User::findOrFail($user_id);

    if (!is_null($User->photo)) {
        $User->photo = url($User->photo);
    }

    $binding = [
         'title' => 'Profile Edit as Guest',
         'User' => $User,
    ];
    return view('profile.editProfileG', $binding);
}

public function profileChangePasswordPage($user_id) {
    $User = User::findOrFail($user_id);

    $s_id = session()->get('user_id');
    $s_priv = session()->get('user_priv');

    if (!is_null($User->photo)) {
        $User->photo = url($User->photo);
    }

    if  (($User->id != $s_id) && ($s_priv == 'A')) {
        $str = 'Change Password for:'.$User->id;
    }
    else {
        $str = 'Change your account password';
    }

    $binding = [
         'title' => $str,
         'User' => $User,
    ];
    return view('profile.changePassword', $binding);
}

public function profileUserUpdateProcessA($user_id) {
    $User = User::findOrFail($user_id);
    $input = request()->all();

        $rules = [
        'display' => ['required', 'in:Y,N'],
        'name'=> ['required', 'max:150', 'notIn:new user', ],
        'email'=> ['required', 'max:150', 'email', 'notIn:user@user', 'unique:users,email,' . $user_id],
        'priv' => ['required', 'in:G,A'],
        'position' => ['required', 'in:FA,PG,UG,AG,AU'],
        'photo' => ['file', 'image'],
        ];    
        
    $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect('/user/profile/'. $User->id . '/edit_a')->withErrors($validator)->withInput();
        }
        if (isset($input['photo'])) {
            $photo = $input['photo'];
            $file_extension = $photo->getClientOriginalExtension(); 
            $file_name = uniqid() . '.' . $file_extension;
            $file_relative_path = 'images\user'.'\\' . $file_name;
            $file_path = public_path($file_relative_path);
            $image = Image::make($photo) -> fit(200, 200) -> save($file_path);
            $input['photo'] = $file_relative_path;
            }
            
        $User->update($input);
        echo "Profile updated";
        header("refresh:3");
        return redirect('/user/profile/manage');
        //return redirect('/user/profile/' . $User->id . '/edit');
        //return redirect()->intended('/');
    }

    public function profileUserUpdateProcessN($user_id) {
        $User = User::findOrFail($user_id);
        $input = request()->all();
    
            $rules = [
            'display' => ['required', 'in:Y,N'],
            'name'=> ['required', 'max:150', 'notIn:new user', ],
            'email'=> ['required', 'max:150', 'email', 'notIn:user@user', 'unique:users,email,' . $user_id],
            'password'=> ['required', 'same:password_confirmation', 'min:6', ],
            'password_confirmation' => ['required', 'min:6', ],
            'priv' => ['required', 'in:G,A'],
            'position' => ['required', 'in:FA,PG,UG,AG,AU'],
            'photo' => ['file', 'image'], //, 'max: 102400'
            ];    
            
        $validator = Validator::make($input, $rules);
            if ($validator->fails()) {
                return redirect('/user/profile/'. $User->id . '/edit_n')->withErrors($validator)->withInput();
            }
            if (isset($input['photo'])) {
                $photo = $input['photo'];
                $file_extension = $photo->getClientOriginalExtension(); 
                $file_name = uniqid() . '.' . $file_extension;
                $file_relative_path = 'images\user'.'\\' . $file_name;
                $file_path = public_path($file_relative_path);
                $image = Image::make($photo) -> fit(200, 200) -> save($file_path);
                $input['photo'] = $file_relative_path;
                }
                
            $input['password'] = Hash::make($input['password']);
            $User->update($input);
            echo "Profile updated";
            header("refresh:3");
            return redirect('/user/profile/manage');
        }
    

    public function profileUserUpdateProcessG($user_id) {
        $User = User::findOrFail($user_id);
        $input = request()->all();

        $s_id = session()->get('user_id');
        $s_priv = session()->get('user_priv');
    
            $rules = [
            'display' => ['required', 'in:Y,N'],
            'name'=> ['required', 'max:150', 'notIn:new user', ],
            'email'=> ['required', 'max:150', 'email', 'notIn:user@user', 'unique:users,email,' . $user_id],
            'position' => ['required', 'in:FA,PG,UG,AG,AU'],
            'photo' => ['file', 'image'],
            ];    
            
        $validator = Validator::make($input, $rules);
            if ($validator->fails()) {     
                return redirect('/user/profile/'. $User->id . '/edit_g')->withErrors($validator)->withInput();
            }
            if (isset($input['photo'])) {
                $photo = $input['photo'];
                $file_extension = $photo->getClientOriginalExtension(); 
                $file_name = uniqid() . '.' . $file_extension;
                $file_relative_path = 'images\user'.'\\' . $file_name;
                $file_path = public_path($file_relative_path);
                $image = Image::make($photo) -> fit(200, 200) -> save($file_path);
                $input['photo'] = $file_relative_path;
                }
                
            $User->update($input);
            echo "Profile updated";
            if ($s_priv == 'A') {
                return redirect('/user/profile/manage');
                } else {
                return redirect()->intended('/');
                }
            //return redirect('/user/profile/' . $User->id . '/edit');
            //return redirect()->intended('/');
        }

        public function profileChangePasswordProcess($user_id) {
            $User = User::findOrFail($user_id);
            $input = request()->all();

            $s_id = session()->get('user_id');
            $s_priv = session()->get('user_priv');
        
                $rules = [
                'password'=> ['required', 'same:password_confirmation', 'min:6', ],
                'password_confirmation' => ['required', 'min:6', ],
                ];    
                
            $validator = Validator::make($input, $rules);
                if ($validator->fails()) {
                    //var_dump($validator->messages());
                   
                    return redirect('/user/profile/'. $User->id . '/changepw')->withErrors($validator)->withInput();
                    //var_dump($validator);
                }
                    
                $input['password'] = Hash::make($input['password']);
                $User->update($input);
                echo "Profile password updated";
                header("refresh:3");

                if ($s_priv == 'A') {
                    return redirect('/user/profile/manage');
                    } else {
                    return redirect()->intended('/');
                    }
                //return redirect('/user/profile/' . $User->id . '/edit');
                //return redirect()->intended('/');
            }    

public function profileManageListProcess() {
    $row_per_page = 10;
    $ProfilePaginate = User::OrderBy('updated_at', 'desc')
        ->paginate($row_per_page);
        $Awards = Awards::all();
        $Pub = Pubs::all();
        $Awardz = Awards::all();
        $Pubz = Pubs::all();

//set photo url
foreach ($ProfilePaginate as &$User) {
    if (!is_null($User->photo)) {
        $User->photo = url($User->photo);
    }
}

    $binding = [
    'title' => 'Profile List',
    'ProfilePaginate'=> $ProfilePaginate,
    'Awards' => $Awards,
    'Pub' => $Pub,
    'Awardz' => $Awardz,
    'Pubz' => $Pubz,
    ];
    return view ('profile.manageProfile', $binding);
    }

};