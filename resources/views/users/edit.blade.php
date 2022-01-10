<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg" style='padding:10px;'>
                @include('users.field')
            </div>
        </div>
    </div>
</x-app-layout>