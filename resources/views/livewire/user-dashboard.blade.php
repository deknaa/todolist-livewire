<div>
    <x-navbar></x-navbar>

    <div class="mt-20 max-w-screen-xl mx-auto p-4">
        <h1 class="text-black dark:text-white capitalize">Hi, welcome back <span class="font-bold">{{ Auth::user()->name }}</span> 👋</h1>
    </div>

    <div class="max-w-xl mx-auto mt-5 mb-5">
        <label for="todo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Add Your Task</label>
        <form action="" wire:submit="addTask" class="flex gap-3">
            <x-input id="todo" name="todo" wire:model="todo" placeholder="Add Task" class="w-[75%]"></x-input>
            <x-button class="w-[25%]">Add Task</x-button>
        </form>
    </div>

    <div class="relative overflow-x-auto shadow-md dark:shadow-slate-300 sm:rounded-lg max-w-xl mx-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Todo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Started
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ended
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($todos as $todo)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white capitalize">
                            {{ $todo->todo }}
                        </th>
                        <td class="px-6 py-4 capitalize">
                            {{ $todo->status }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $todo->created_at->diffForHumans() }}
                        </td>
                        <td class="px-6 py-4">
                            @if($todo->end_date === null)
                                <span></span>
                            @else
                                {{ $todo->end_date }}
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                @empty
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            You don't have any task
                        </td>
                    </tr>
            @endforelse
            </tbody>
        </table>

        <div class="p-3">
            {{ $todos->links() }}
        </div>

    </div>

</div>
