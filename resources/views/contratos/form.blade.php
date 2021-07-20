<style>
    html {
        /* min-height400%; */
        /* height400%; */
    }

    body {
        /* padding40px; */
        /* height: cal400% - 40px); */
    }

    element.style {
        /* flex-direction: column; */
    }

    .container1 {
        display: flex;
        flex-direction: column;

        /* background: red; */
    }

    .container2 {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
         width: 870px;
        /* justify-content: center; */
        /* align-items: stretch; */

         height:400px;
        /* align-self: auto; */

    }

    .container3 {
        display: flex;
        flex-direction: column;
        width: 200px;
    }

    .container4 {}


    .container1 .div_cliente {
        flex-basis:40%;
    }

    .container2 .div_desconto {
        flex-basis:40%;
    }

    .container2 .div_msg_pend_automatica {
        flex-basis:40%;
    }

    .container2 .div_dias_para_pendencia {
        flex-basis:40%;
    }

    .container2 .div_acrescimo {
        flex-basis: 40%;
    }

</style>



<div>
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
</div>

<div class="container1">
    <tr>
        <div class="div_cliente form-group {{ $errors->has('cliente') ? 'has-error' : '' }}">
            <label for="cliente" class="control-label">{{ 'Cliente' }}</label>
            <input class="form-control col-form-label col-sm-7" rows="5" name="cliente" type="text" id="cliente"
                required placeholder="Buscar por cliente..." value="{{ old('cliente', @$contrato->cliente) }}">
            {!! $errors->first('cliente', '<p class="help-block">:message</p>') !!}
        </div>
    </tr>
</div>

<br>

<div class="container2">
    <tr>
        <div class="div_desconto form-group {{ $errors->has('desconto') ? 'has-error' : '' }}">
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
        <div class="div_msg_pend_automatica form-group {{ $errors->has('msg_pend_automatica') ? 'has-error' : '' }}">
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
        <div class="div_dias_para_pendencia form-group {{ $errors->has('dias_para_pendencia') ? 'has-error' : '' }}">
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


    <br>


    <tr>
        <div class="div_acrescimo form-group {{ $errors->has('acrescimo') ? 'has-error' : '' }}" style="align-self;">
            <label for="desconto" class="control-label">{{ 'Acréscimo R$' }}</label>
            <div class="col">
                <div class="row">
                    <input type="number" name="numero" class="form-control col-form-label col-sm-3 id=" num"
                        oninput="Num()"> &nbsp;
                </div>
            </div>
        </div>
    </tr>
</div>

<br>





<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Atualizar' : 'Cadastrar' }}">
</div>
