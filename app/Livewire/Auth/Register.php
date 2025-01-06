<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $username;
    public $email;
    public $email_verified_at;
    public $password;

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|min:3|string',
            'username' => 'required|min:3|max:8|unique:users,username',
            'email' => 'email|required|unique:users,email',
            'password' => 'min:4|required|string',
        ]);
        
        User::create([
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'email_verified_at' => now(),
            'password' => bcrypt($this->password),
        ]);

        return back()->with('success', 'Berhasil melakukan registrasi');
    }
}
