
        <div class="row">
                <div class="col-md-3">
                  <label for="name" class="block text-sm font-medium text-gray-700">Nome Completo</label>
                  <input type="text" name="name" id="name" autocomplete="name" value="{{ $user->name ?? '' }}" class="form-control">
                </div>

                <div class="col-md-3">
                  <label for="perfil_id" class="block text-sm font-medium text-gray-700">Perfil</label>
                  <select id="perfil_id" name="perfil_id" autocomplete="perfil_id" class="form-control">
                    <option value='null'>Selecione um Perfil</option>
                    @isset($perfis)
                      @foreach($perfis as $perfil)
                        <option value="{{ $perfil->id }}"  {{ isset($user) && $user->perfil_id == $perfil->id ? 'selected' : '' }}>{{ $perfil->name }}</option>
                      @endforeach
                    @endisset
                  </select>
                </div>
                
                <div class="col-md-3">
                  <label for="name" class="block text-sm font-medium text-gray-700">Status</label>
                  <select id="status" name="status" autocomplete="status" class="form-control">
                      <option value="1">Sim</option>
                      <option value="0" {{ isset($user) && $user->status == 0 ? 'selected' : '' }}>Não</option>
                  </select>
                </div>


                <div class="col-md-3">
                  <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone</label>
                  <input type="text" name="telefone" id="telefone" autocomplete="telefone" value="{{ $user->telefone ?? '' }}" class="phone_with_ddd form-control">
                </div>

        </div>


              <div class="row mt-2">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                        <input type="text" name="email" id="email" autocomplete="email" value="{{ $user->email ?? '' }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                        <input type="password" name="password" id="password" autocomplete="password" class="form-control">
                      </div>
                    </div>
              </div>

              <div class="row mt-2">

                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                      Salvar
                    </button>
                    <a href="{{ route('users.index') }}" class="btn btn-default">
                      Cancelar
                    </a>
                  </div>
              </div>