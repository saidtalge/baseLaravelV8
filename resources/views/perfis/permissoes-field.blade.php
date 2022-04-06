<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-1 md:gap-1">
        
  <table id='dataTableFormat' class="display min-w-full divide-y divide-gray-200 w-full">
                        <thead class="bg-gray-50">
                <tr>
                  <td>Nome</td>
                    <td width='30%'>Permissão</td>
                </tr>
            </thead>
            <tbody>
                @foreach($rotas as $rota)
                  <tr>
                      <td>{{ $rota->name }}</td>
                      @php
                        $desired_object = $perfil->permissoes->filter(function($item) use ($rota) {
                            if($rota->id == $item->rotas_id){
                              return $item;
                            }
                        })->first();
                      @endphp
                              <td>
                                  <select name="{{ 'rota-'.$rota->id }}" id='' class='h-10 border border-dark-500 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'>
                                    <option value='0'>Nenhum</option>
                                    <option value='1' {{ (isset($desired_object) && $desired_object->rules == 1)?'selected':'' }}>Leitura</option>
                                    <option value='3' {{ (isset($desired_object) && $desired_object->rules == 3)?'selected':'' }}>Leitura/Inserção</option>
                                    <option value='7' {{ (isset($desired_object) && $desired_object->rules == 7)?'selected':'' }}>Leitura/Inserção/Edição</option>
                                  </select>
                              </td>
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