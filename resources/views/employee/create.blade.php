<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create employees') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('employee.create') }}">
    @csrf
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <!-- First name -->
                        <div>
                            <x-label for="first_name" :value="__('First name')" />

                            <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
                        </div>

                        <!-- Last name -->
                        <div class="mt-4">
                            <div>
                                <x-label for="last_name" :value="__('Last name')" />

                                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus />
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mt-4">
                            <div>
                                <x-label for="email" :value="__('Email')" />

                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="block mt-1 w-full"
                                     type="password"
                                     name="password"
                                     required autocomplete="current-password" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Create') }}
                            </x-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
