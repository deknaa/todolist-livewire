<div class="flex justify-center items-center h-screen">
    <div>
        <h1 class="text-2xl font-bold">Halaman Login</h1>
        <form class="max-w-sm mx-auto" wire:submit="login">
            <div class="mb-5">
                <x-label for="email">Email</x-label>
                <x-input name="email" id="email" placeholder="Your Email..." type="email" wire:model="email" />
            </div>
            <div class="mb-5">
                <x-label for="password">Password</x-label>
                <x-input name="password" id="password" placeholder="Your Password..." type="password" wire:model="password" />
            </div>
            <div class="flex items-start mb-5">
                <p>Don't have an account? <a href="{{ route('register') }}" class="text-blue-700 underline hover:text-blue-900" wire:navigate>Register Here</a></p>
            </div>
            <x-button>Login</x-button>
        </form>
    </div>
</div>
