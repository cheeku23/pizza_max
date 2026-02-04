<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pizza;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Admin dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Pizzas list
    public function pizzasIndex()
    {
        $pizzas = Pizza::all();
        return view('admin.pizzas.index', compact('pizzas'));
    }

    public function postPizzasIndex()
    {
        $pizzas = Pizza::all();
        return view('admin.pizzas.index', compact('pizzas'));
    }

    // Create pizza page
    public function pizzasCreate()
    {
        return view('admin.pizzas.create');
    }

    // Show single pizza details (admin)
    public function pizzasShow(Pizza $pizza)
    {
        return view('admin.pizzas.details', compact('pizza'));
    }

    // Store new pizza
    public function pizzasStore(Request $request)
    {
        dd($request->all());
    }

    // Orders list
    public function ordersIndex()
    {
        return view('admin.orders.index');
    }

    // Customers list
    public function customersIndex()
    {
        return view('admin.customers.index');
    }

    // Analytics page
    public function analytics()
    {
        return view('admin.analytics');
    }

    // Settings page
    public function settings()
    {
        return view('admin.settings');
    }

    // Show login form
    public function loginPage()
    {
        return view('auth.login');
    }

    // Show register form
    public function registerPage()
    {
        return view('auth.register');
    }

    // Handle login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->filled('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    // Handle registration
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Auth::login($user);

        return redirect()->route('admin.dashboard');
    }
}
