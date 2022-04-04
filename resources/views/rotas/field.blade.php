<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">      
        <div class="col-span-6 sm:col-span-3">
            <label for="name" class="block text-sm font-medium text-gray-700">Rota</label>
            <input type="text" name="name" id="name" value="{{ isset($rota->name)? $rota->name : '' }}" placeholder="Ex.: /nomedarota" class="h-10 border border-dark-500 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
    </div>
  </div>
  
  <div class="md:grid md:grid-cols-6 md:gap-6">
    <div class="md:col-span-1">      
        <div class="col-span-6 sm:col-span-3 mt-2">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Salvar</button>
            <a href="{{ route('rotas.index') }}" class="btn btn-default">
            Cancelar
            </a>
        </div>
    </div>
  </div>
</div>