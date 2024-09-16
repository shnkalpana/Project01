<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use PhpParser\Node\Expr\Cast\Double;

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
        }elseif(auth()->attempt(['email' => $InputFieldsValues['loginname'], 'password' => $InputFieldsValues['loginpassword']])){
            $request->session()->regenerate();
        }else{
            redirect('/'); 
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
            'dob' => ['required'],
            'joined_date' => ['required'],
        ]);

        $hourlyRate = $request->input('hourly_rate', 0.00);

        $InputFields['hourly_rate'] = $hourlyRate;

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

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
           'name' => ['min : 3', 'required'],
           'email' => [ 'email', 'required'],
           'hourly_rate' => 'required|numeric|min:0',
           'user_roll' => 'required',
        ]);

        // Update the user's data
        //$user->name = $validatedData['name'];
        //$user->email = $validatedData['email'];
        //$user->hourly_rate = $validatedData['hourly_rate'];
        //$user->user_roll = $validatedData['user_roll'];
        $user->update($validatedData);
        //$user->save();

        // Redirect back or to a success page
        return redirect('/admin')->with('success', 'User updated successfully!');
    }
}
