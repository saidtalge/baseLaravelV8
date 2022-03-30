<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style='padding:10px;'>
                    
            <form action="{{ route('users.update',[$user]) }}" method="POST" class=''>
                        @csrf
                        @method('PUT')
                        @include('users.field')
                    </form>
            </div>
        </div>
    </div>
</x-app-layout>