
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfis') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style='padding:10px;'>
                    
                @if($errors->any())
                    <div class="bg-red-400 text-red-900 p-3 sm:rounded-lg my-3">
                        @foreach ($errors->all() as $error)
                        <p class="yellow-text font lato-normal center">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('perfis.update',[$perfil->id]) }}" method="POST" class=''>
                    @csrf
                        @method('PUT')
                    @include('perfis.field')
                </form>
                <hr class="my-4">
                <form action="{{ route('permissoes.update',[$perfil->id]) }}" method="POST" class=''>
                        @csrf
                        @method('PUT')
                        @include('perfis.permissoes-field')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>