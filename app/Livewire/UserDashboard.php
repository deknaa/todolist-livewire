<?php

namespace App\Livewire;

use App\Models\Todolist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDashboard extends Component
{
    public function render()
    {
        $users = Auth::user();
        $todos = Todolist::where('user_id', $users->id)->get();
        return view('livewire.user-dashboard', compact('users', 'todos'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public $todo;

    public function addTask()
    {
        $this->validate([
            'todo' => 'required|min:3|string',
        ]);

        Todolist::create([
            'todo' => $this->todo,
            'user_id' => Auth::user()->id
        ]);
    }
}
