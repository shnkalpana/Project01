<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //check login is valid
    public function login(Request $request)
    {

        $InputFieldsValues = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);

        if (auth()->attempt(['name' => $InputFieldsValues['loginname'], 'password' => $InputFieldsValues['loginpassword']])) {
            $request->session()->regenerate();
        }


        //redirect according to user roll
        if (auth()->user()['user_roll'] == 'admin') {
            return redirect('admin');
        } elseif (auth()->user()['user_roll'] == 'projectmanager') {
            return redirect('project_manager');
        } else {
            return redirect('/');
        }
    }

    public function register(Request $request)
    {
        $InputFields = $request->validate([
            'name' => ['required', 'min : 3', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['min : 8', 'max : 30'],
            'user_roll' => ['required'],
            'dob' => ['required'],
            'joined_date' => ['required'],
            'hourly_rate' => ['required']
        ]);

        $InputFields['password'] = bcrypt($InputFields['password']);
        $user = User::create($InputFields);
        auth()->login($user);

        if (auth()->user()['user_roll'] == 'admin') {
            return redirect('admin');
        } elseif (auth()->user()['user_roll'] == 'projectmanager') {
            return redirect('project_manager');
        } else {
            return redirect('/');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }
}
