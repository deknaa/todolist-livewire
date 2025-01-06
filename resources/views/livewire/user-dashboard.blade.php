<div>
    <h1>Halaman Dashboard User</h1>
    <h1>{{ $users->name }}</h1>
    <form action="" wire:submit="logout">
       <x-button>Logout</x-button>
    </form>
</div>
