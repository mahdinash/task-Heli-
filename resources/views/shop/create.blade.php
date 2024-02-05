<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            User Task management
        </h2>
    </x-slot>
    

    <form method="POST" action="{{ route('shop.store') }}">
            @csrf

            <div>
                <x-label for="first_name" value="first name" />
                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="last_name" value="last name" />
                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required />
            </div>

            <div class="mt-4">
                <x-label for="task" value="task" />
                <x-input id="task" class="block mt-1 w-full" type="text" name="task" :value="old('task')" required />
            </div>

            <hr>

            <div class="mt-4">
                <x-label for="email" value="email" />
                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-label for="username" value="username" />
                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required />
            </div>

            <div class="mt-4">
                <x-label for="status" value="status" />
                <x-input id="status" class="block mt-1 w-full" type="text" name="status" :value="old('status')" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ms-4">
                    save user
                </x-button>
            </div>
        </form>
</x-app-layout>
