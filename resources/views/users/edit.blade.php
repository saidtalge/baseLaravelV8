<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuários') }}
        </h2>
    </x-slot>

    <div class="py-12 mt-4">
        <div class="card">
            <div class="card-body">
                                
                <x-jet-validation-errors class="mb-4" />
                    <form action="{{ route('users.update',[$user]) }}" method="POST" class=''>
                        @csrf
                        @method('PUT')
                        @include('users.field')
                    </form>
            </div>
        </div>
    </div>
</x-app-layout>