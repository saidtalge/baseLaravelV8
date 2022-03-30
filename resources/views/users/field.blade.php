<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-12 md:gap-6">
    <div class="md:col-span-2">
      <label for="name" class="block text-sm font-medium text-gray-700">Nome Completo</label>
      <input type="text" name="name" id="name" autocomplete="name" value="{{ $user->name ?? '' }}" class="h-10 border border-dark-500 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
    </div>
    <div class="md:col-span-2">
      <label for="perfil_id" class="block text-sm font-medium text-gray-700">Perfil</label>
      <select id="perfil_id" name="perfil_id" autocomplete="perfil_id" class="h-10 border border-dark-500 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        <option value='null'>Selecione um Perfil</option>
        @isset($perfis)
          @foreach($perfis as $perfil)
            <option value="{{ $perfil->id }}" {{ isset($user) && $user->perfil_id == $perfil->id ? 'selected' : '' }}>{{ $perfil->name }}</option>
          @endforeach
        @endisset
      </select>
    </div>
    <div class="md:col-span-2">
      <label for="name" class="block text-sm font-medium text-gray-700">Status</label>
      <select id="status" name="status" autocomplete="status" class="h-10 border border-dark-500 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        <option value="1">Sim</option>
        <option value="0" {{ isset($user) && $user->status == 0 ? 'selected' : '' }}>Não</option>
      </select>
    </div>
    <div class="md:col-span-2">
      <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone</label>
      <input type="text" name="telefone" id="telefone" autocomplete="telefone" value="{{ $user->telefone ?? '' }}" class="phone_with_ddd h-10 border border-dark-500 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
    </div>
  </div>

</div>


<div class="mt-10 sm:mt-2">
  <div class="md:grid md:grid-cols-12 md:gap-6">

    <div class="md:col-span-2">

      <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
      <input type="text" name="email" id="email" autocomplete="email" value="{{ $user->email ?? '' }}" class="h-10 border border-dark-500 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
    </div>

    <div class="md:col-span-2">

      <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
      <input type="password" name="password" id="password" autocomplete="password" class="h-10 border border-dark-500 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
    </div>
  </div>
</div>


<div class="mt-10 sm:mt-2">
  <div class="md:grid md:grid-cols-6 md:gap-6">
    <div class="md:col-span-1">
      <div class="col-span-6 sm:col-span-3 mt-2">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Salvar</button>

        <a href="{{ route('users.index') }}" class="btn btn-default">
          Cancelar
        </a>
      </div>
    </div>
  </div>
</div>