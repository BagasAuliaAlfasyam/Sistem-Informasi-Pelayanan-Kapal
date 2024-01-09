<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\DataFeed;
use App\Models\User;
use Carbon\Carbon;
use Laravel\Jetstream\Jetstream;

class DashboardController extends Controller
{
    /**
     * Displays the dashboard screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $dataFeed = new DataFeed();

        return view('pages/dashboard/dashboard', compact('dataFeed'));
    }

    public function addUser()
    {
        return view('auth.add-user');
    }

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function storeNewUser(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required|confirmed',
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ]);
        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect()->route('add-user');
    }
}