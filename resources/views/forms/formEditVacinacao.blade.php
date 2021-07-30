
      <div id="header2" align="center" style="width: 100%">
        <div class="blogentry">
            <h1>PPA PARTICIPATIVO</h1>
            <h5>SÃO LEOPOLDO 2022 - 2026</h5>
        </div>
    </div>
    <form action="{{ route('vacinacao.update') }}" method="post" class="form-horizontal" id="formEventos">
        @csrf
        @method('put')
        <div id="container">
                {{-- Formulario Id --}}

            
                                    <div class="form-group col-md-6">
                                        <label>Id</label>
                                        <div class="input-group">
                                            <input id="id" type="text" readonly="true" class="form-control @error('id') is-invalid @enderror" name="id"
                                                    value="{{ $Vacinacao->id }}" autocomplete="id" autofocus placeholder="Id">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="dia" class="control-label">Data: *</label>
                                            <div class="input-group">
                                                <input type="date" class="form-control" id="dia" name="dia" placeholder="dd/mm/aaaa"
                                                value="{{$Vacinacao->dia  }}">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Doses recebidas: *</label>
                                        <div class="input-group">
                                            <input id="dosesRecebidas" type="text" class="form-control" name="dosesRecebidas"
                                            value="{{ old('dosesRecebidas',$Vacinacao->dosesRecebidas) }}" >
                                        </div>
                                    </div>
                    
                                    <div class="form-group col-md-6">
                                        <label>Doses Aplicadas: *</label>
                                        <div class="input-group">
                                            <input id="dosesAplicadas" type="text" class="form-control" name="dosesAplicadas"
                                            value="{{ old('dosesAplicadas',$Vacinacao->dosesAplicadas) }}" >
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Primeira Dose Aplicada: *</label>
                                        <div class="input-group">
                                            <input id="primeiraDoseAplicada" type="text" class="form-control" name="primeiraDoseAplicada"
                                            value="{{ old('primeiraDoseAplicada',$Vacinacao->primeiraDoseAplicada) }}" >
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Segunda Dose Aplicada: *</label>
                                        <div class="input-group">
                                            <input id="segundaDoseAplicada" type="text" class="form-control" name="segundaDoseAplicada"
                                            value="{{ old('segundaDoseAplicada',$Vacinacao->segundaDoseAplicada) }}" >
                                        </div>
                                    </div>
                                    
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a class="btn btn-secondary" href="#">Cancelar</a>
            </div>
        </div>
        </form>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" style=""></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous" style=""></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
            </script>

    </body>
</html>
