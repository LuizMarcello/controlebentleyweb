<div class="container">
    <script>
        function Num() {
            var numero = document.getElementById('num');
            numero = 0;

            document.getElementById('menos').click(function() {
                numero--;
            });
            document.getElementById('mais').click(function() {
                numero++;
            });
        }
    </script>

    <tr>
        <div class="form-group {{ $errors->has('cliente') ? 'has-error' : '' }}">
            <label for="cliente" class="control-label">{{ 'Cliente' }}</label>
            <input class="form-control col-form-label col-sm-7" rows="5" name="cliente" type="text" id="cliente"
                required placeholder="Buscar por cliente..." value="{{ old('cliente', @$contrato->cliente) }}">
            {!! $errors->first('cliente', '<p class="help-block">:message</p>') !!}
        </div>
    </tr>
    <br>
    <tr>
        <div class="form-group {{ $errors->has('desconto') ? 'has-error' : '' }}">
            <label for="desconto" class="control-label">{{ 'Desconto R$' }}</label>
            <div class="col">
                <div class="row">
                    <input type="number" name="numero" class="form-control col-form-label col-sm-3 id=" num"
                        oninput="Num()"> &nbsp;
                </div>
            </div>
        </div>
    </tr>
    <br>

    <tr>
        <div class="form-group {{ $errors->has('msg_pend_automatica') ? 'has-error' : '' }}">
            <label for="msg_pend_automatica" class="control-label">{{ 'Msg. pendência - automatica?' }}</label>
            <select name="msg_pend_automatica" class="form-control col-form-label col-sm-3" id="msg_pend_automatica">
                @foreach (json_decode('{" padrão":"Padrâo","sim":"Sim","nao":"Não"}', true)
                    as $optionKey=> $optionValue)
                    <option value="{{ $optionKey }}"
                        {{ isset($contrato->msg_pend_automatica) && $contrato->msg_pend_automatica == $optionKey ? 'selected' : '' }}>
                        {{ $optionValue }}</option>
                @endforeach
            </select>
            {!! $errors->first('msg_pend_automatica', '<p class="help-block">:message</p>') !!}
            <div>
                <h6> Padrão* usa as config. predefinidas </h6>
            </div>
        </div>
    </tr>
    <br>
    <tr>
        <div class="form-group {{ $errors->has('dias_para_pendencia') ? 'has-error' : '' }}">
            <div class="col">
                <div class="row">
                    <label for="dias_para_pendencia" class="control-label">{{ 'Dias para pendência' }}</label>
                </div>
                <div class="row">
                    <input class="form-control col-form-label col-sm-3" type="number" name="numero"
                        id="dias_para_pendencia" oninput="Num()"> &nbsp;
                </div>
            </div>
            <div>
                <h6> Deixe em branco para usar conf. padrão </h6>
            </div>
        </div>
    </tr>
</div>

<br>

</div>

</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Atualizar' : 'Cadastrar' }}">
</div>
