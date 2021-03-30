<div class="form-group row {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="col-form-label col-sm-2">{{ 'User Id' }}</label>
        <div class="col-sm-10">
           <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($testetestis->user_id) ? $testetestis->user_id : ''}}" >
            {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="form-group row {{ $errors->has('nome_razaosocial') ? 'has-error' : ''}}">
    <label for="nome_razaosocial" class="col-form-label col-sm-2">{{ 'Nome Razaosocial' }}</label>
        <div class="col-sm-10">
           <textarea class="form-control" rows="5" name="nome_razaosocial" type="textarea" id="nome_razaosocial" >{{ isset($testetestis->nome_razaosocial) ? $testetestis->nome_razaosocial : ''}}</textarea>
            {!! $errors->first('nome_razaosocial', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="form-group row {{ $errors->has('ie_rg') ? 'has-error' : ''}}">
    <label for="ie_rg" class="col-form-label col-sm-2">{{ 'Ie Rg' }}</label>
        <div class="col-sm-10">
           <input class="form-control" name="ie_rg" type="text" id="ie_rg" value="{{ isset($testetestis->ie_rg) ? $testetestis->ie_rg : ''}}" >
            {!! $errors->first('ie_rg', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="form-group row {{ $errors->has('documento') ? 'has-error' : ''}}">
    <label for="documento" class="col-form-label col-sm-2">{{ 'Documento' }}</label>
        <div class="col-sm-10">
           <input class="form-control" name="documento" type="text" id="documento" value="{{ isset($testetestis->documento) ? $testetestis->documento : ''}}" >
            {!! $errors->first('documento', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="form-group row {{ $errors->has('nome_contato') ? 'has-error' : ''}}">
    <label for="nome_contato" class="col-form-label col-sm-2">{{ 'Nome Contato' }}</label>
        <div class="col-sm-10">
           <textarea class="form-control" rows="5" name="nome_contato" type="textarea" id="nome_contato" >{{ isset($testetestis->nome_contato) ? $testetestis->nome_contato : ''}}</textarea>
            {!! $errors->first('nome_contato', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="form-group row {{ $errors->has('celular1') ? 'has-error' : ''}}">
    <label for="celular1" class="col-form-label col-sm-2">{{ 'Celular1' }}</label>
        <div class="col-sm-10">
           <input class="form-control" name="celular1" type="text" id="celular1" value="{{ isset($testetestis->celular1) ? $testetestis->celular1 : ''}}" >
            {!! $errors->first('celular1', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="form-group row {{ $errors->has('celular2') ? 'has-error' : ''}}">
    <label for="celular2" class="col-form-label col-sm-2">{{ 'Celular2' }}</label>
        <div class="col-sm-10">
           <input class="form-control" name="celular2" type="text" id="celular2" value="{{ isset($testetestis->celular2) ? $testetestis->celular2 : ''}}" >
            {!! $errors->first('celular2', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="form-group row {{ $errors->has('telefone1') ? 'has-error' : ''}}">
    <label for="telefone1" class="col-form-label col-sm-2">{{ 'Telefone1' }}</label>
        <div class="col-sm-10">
           <input class="form-control" name="telefone1" type="text" id="telefone1" value="{{ isset($testetestis->telefone1) ? $testetestis->telefone1 : ''}}" >
            {!! $errors->first('telefone1', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="form-group row {{ $errors->has('telefone2') ? 'has-error' : ''}}">
    <label for="telefone2" class="col-form-label col-sm-2">{{ 'Telefone2' }}</label>
        <div class="col-sm-10">
           <input class="form-control" name="telefone2" type="text" id="telefone2" value="{{ isset($testetestis->telefone2) ? $testetestis->telefone2 : ''}}" >
            {!! $errors->first('telefone2', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="form-group row {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-form-label col-sm-2">{{ 'Email' }}</label>
        <div class="col-sm-10">
           <input class="form-control" name="email" type="text" id="email" value="{{ isset($testetestis->email) ? $testetestis->email : ''}}" >
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="form-group row {{ $errors->has('instalador') ? 'has-error' : ''}}">
    <label for="instalador" class="col-form-label col-sm-2">{{ 'Instalador' }}</label>
        <div class="col-sm-10">
           <input class="form-control" name="instalador" type="text" id="instalador" value="{{ isset($testetestis->instalador) ? $testetestis->instalador : ''}}" >
            {!! $errors->first('instalador', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="form-group row {{ $errors->has('banda') ? 'has-error' : ''}}">
    <label for="banda" class="col-form-label col-sm-2">{{ 'Banda' }}</label>
        <div class="col-sm-10">
           <select name="banda" class="form-control" id="banda" >
    @foreach (json_decode('{"ka":"Ka","ku":"ku"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($testetestis->banda) && $testetestis->banda == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
            {!! $errors->first('banda', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="form-group row {{ $errors->has('formapagamento') ? 'has-error' : ''}}">
    <label for="formapagamento" class="col-form-label col-sm-2">{{ 'Formapagamento' }}</label>
        <div class="col-sm-10">
           <select name="formapagamento" class="form-control" id="formapagamento" >
    @foreach (json_decode('{"boleto":"Boleto","cartao":"Cart\u00e3o","depccorrente":"Dep\u00f3sito em conta","pix":"Pix"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($testetestis->formapagamento) && $testetestis->formapagamento == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
            {!! $errors->first('formapagamento', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Atualizar' : 'Criar' }}">
</div>
