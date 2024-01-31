<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        return view('account.index');
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'first_name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|confirmed',
                'password_confirmation' => 'required|min:6',
                'gender' =>'required',
                'dofb_day' => 'required',
                'dofb_month' => 'required',
                'dofb_year' => 'required',
                // 'lookingforashare' => 'boolean',
                // 'haveashare' => 'boolean',
                // 'makeashare' => 'boolean',
                'where_heard' => 'string',
            ]);

            $user = new User();

            $user->first_name = $validated['first_name'];
            $user->last_name = $validated['last_name'];
            $user->email = $validated['email'];
            $user->password = bcrypt($validated['password']);
            $user->gender = $validated['gender'];
            $user->dofb_day = (int) $validated['dofb_day'];
            $user->dofb_month = (int) $validated['dofb_month'];
            $user->dofb_year = (int) $validated['dofb_year'];
            $user->lookingforashare = $request->input('lookingforashare') ? true : false;
            $user->haveashare = $request->input('haveashare') ? true : false;
            $user->makeashare = $request->input('makeashare') ? true : false;
            $user->where_heard = $validated['where_heard'];

            $user->save();

            // login the user
            Auth::login($user);

            return redirect()->route('account.register2');
        }

        return view('account.register');
    }

    public function register2(Request $request)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'advertiser_role' => 'nullable|in:liveInLandlord,liveOutLandlord,currentTenant,agent,formerFlatmate',
                'date_available' => 'nullable|date',
                'min_term' => 'nullable|integer',
                'max_term' => 'nullable|integer',
                'occupation' => 'required',
            ]);

            $user = User::find(Auth::id());

            $user->advertiser_role = $validated['advertiser_role'];
            $user->date_available = $validated['date_available'];
            $user->min_term = (int) $validated['min_term'];
            $user->max_term = (int) $validated['max_term'];
            $user->occupation = $validated['occupation'];

            $user->save();

            return redirect()->route('account.thank-you');
        }
        return view('account.register2');   
    }

    public function thankYou(Request $request)
    {
        return view('account.thank-you');   
    }

    public function login()
    {
        return view('account.login');
    }
}
