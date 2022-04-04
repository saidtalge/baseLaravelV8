<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-1 md:gap-1">
        
  <table id='dataTableFormat' class="display min-w-full divide-y divide-gray-200 w-full">
                        <thead class="bg-gray-50">
                <tr>
                  <td>Nome</td>
                    <td width='10px'>Leitura</td>
                    <td width='10px'>Inserção</td>
                    <td width='10px'>Edição</td>
                </tr>
            </thead>
            <tbody>
                @foreach($rotas as $rota)
                  <tr>
                      <td>{{ $rota->name }}</td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                @endforeach
            </tbody>
        </table>
  </div>
  
  <div class="md:grid md:grid-cols-6 md:gap-6">
    <div class="md:col-span-1">      
        <div class="col-span-6 sm:col-span-3 mt-2">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Salvar</button>
        </div>
    </div>
  </div>
</div>