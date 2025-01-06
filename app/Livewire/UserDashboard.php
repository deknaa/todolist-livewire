<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDashboard extends Component
{
    public function render()
    {
        $users = Auth::user();
        return view('livewire.user-dashboard', compact('users'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
