<div class="flex flex-col justify-center items-center max-w-sm mx-auto min-h-screen">
    <h1 class="text-2xl mb-4 font-bold">Halaman <span class="text-blue-600">Register</span></h1>
    <form class="" wire:submit="save">
        <div class="w-full">
            <div class="mb-5">
                <x-label for="username">Name</x-label>
                <x-input name="username" id="username" placeholder="Your Name..." wire:model="name" />
            </div>
            <div class="mb-5">
                <x-label for="username">Username</x-label>
                <x-input name="username" id="username" placeholder="Your Username..." wire:model="username" />
            </div>
            <div class="mb-5">
                <x-label for="email">Email</x-label>
                <x-input name="email" id="email" placeholder="Your Email..." type="email" wire:model="email" />
            </div>
            <div class="mb-5">
                <x-label for="password">Password</x-label>
                <x-input name="password" id="password" type="password" placeholder="Your Password..."
                    wire:model="password" />
            </div>
            <div class="flex items-start mb-5">
                <p>Already registered? <a href="{{ route('login') }}"
                        class="text-blue-700 underline hover:text-blue-900" wire:navigate>Login Here</a></p>
            </div>
            <x-button>Register</x-button>
        </div>
    </form>
</div>
