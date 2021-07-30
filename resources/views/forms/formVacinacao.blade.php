


<body>
    <div>
    <form action="{{ route('vacinacao.store')}}" method="POST" >
        @csrf
        <div class="card">
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="dia" class="control-label">Dia:</label>
                    <div class="input-group">
                        <input type="date" class="form-control" id="dia" name="dia" value="{{ old('dia', '0') }}"/>
                    </div>
                </div>
            </div>

                <div class="form-group col-md-6">
                    <label>Doses recebidas: *</label>
                    <div class="input-group">
                        <input id="dosesRecebidas" type="text" class="form-control" name="dosesRecebidas"
                                value="{{old('dosesRecebidas')}}" required>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label>Doses aplicadas: *</label>
                    <div class="input-group">
                        <input id="dosesAplicadas" type="text" class="form-control" name="dosesAplicadas"
                                value="{{old('dosesAplicadas')}}" required>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label>Primeira dose aplicada: *</label>
                    <div class="input-group">
                        <input id="primeiraDoseAplicada" type="text" class="form-control" name="primeiraDoseAplicada"
                                value="{{old('primeiraDoseAplicada')}}" required>
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label>Segunda dose aplicada: *</label>
                    <div class="input-group">
                        <input id="segundaDoseAplicada" type="text" class="form-control" name="segundaDoseAplicada"
                                value="{{old('segundaDoseAplicada')}}" required>
                    </div>
                </div>

                {{-- Formulario Conteudo --}}
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a class="btn btn-secondary" href="#">Cancelar</a>
            </div>
        </div>
            </form>
        </div>

    

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
{{-- 
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\CadastroValidacao'); !!} --}}

    {{-- @include('sweetalert::alert') --}}
    </div>
</body>
