<?php

namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Todolist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDashboard extends Component
{
    use WithPagination;

    public $todo;

    public function render()
    {
        $users = Auth::user();
        $todos = Todolist::where('user_id', $users->id)->paginate(5);
        return view('livewire.user-dashboard', compact('users', 'todos'));
    }

    public function logout()
    {
        // logout and break the authenticated status from user and remove user_id from sessions table
        Auth::logout();

        // redirect user to login page
        return redirect()->route('login');
    }

    public function addTask()
    {
        // validate the input
        $this->validate([
            'todo' => 'required|min:3|string',
        ]);

        // create the task and save it to database
        Todolist::create([
            'todo' => $this->todo,
            'user_id' => Auth::user()->id
        ]);

        // clear the input if user is have added task
        $this->reset();
    }
}
