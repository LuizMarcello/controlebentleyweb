{{-- <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($ferramenta->user_id) ? $ferramenta->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div> --}}
<div class="form-group {{ $errors->has('categoria') ? 'has-error' : ''}}">
    <label for="categoria" class="control-label">{{ 'Categoria' }}</label>
    <select name="categoria" class="form-control" id="categoria" required>
    @foreach (json_decode('{"ferramenta":"Ferramenta","instrumento":"Instrumento"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($ferramenta->categoria) && $ferramenta->categoria == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
{!! $errors->first('tipoferramenta', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('tipoferramenta') ? 'has-error' : ''}}">
    <label for="tipoferramenta" class="control-label">{{ 'Tipo' }}</label>
    <select name="tipoferramenta" class="form-control" id="tipoferramenta" required>
    @foreach (json_decode('{"chavedefenda":"Chave de fenda","chavephilips":"Chave Phillips","alicatedebico":"Alicate de bico","alicatedecorte":"Alicate de corte","alicateuniversal":"Alicate universal","chaveinglesa":"Chave Inglesa","multimetro":"Multimetro"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($ferramenta->tipoferramenta) && $ferramenta->tipoferramenta == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('categoria', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('tipoinstrumento') ? 'has-error' : ''}}">
    <label for="tipoinstrumento" class="control-label">{{ 'Tipo' }}</label>
    <select name="tipoinstrumento" class="form-control" id="tipoinstrumento" required>
    @foreach (json_decode('{"instrumento1":"Instrumento 1","instrumento2":"Instrumento 2","instrumento3":"Instrumento 3"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($ferramenta->tipoinstrumento) && $ferramenta->tipoinstrumento == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('categoria', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('Descricao') ? 'has-error' : ''}}">
    <label for="Descricao" class="control-label">{{ 'Descricao' }}</label>
    <input class="form-control" rows="5" name="Descricao" type="string" id="Descricao" {{ isset($ferramenta->Descricao) ? $ferramenta->Descricao : ''}}">
    {!! $errors->first('Descricao', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('controle') ? 'has-error' : ''}}">
    <label for="controle" class="control-label">{{ 'Controle' }}</label>
    <select name="controle" class="form-control" id="controle" required>
    @foreach (json_decode('{"unidade":"Unidade","jogo":"Jogo"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($ferramenta->controle) && $ferramenta->controle == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('controle', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group {{ $errors->has('Qtde') ? 'has-error' : ''}}">
    <label for="Qtde" class="control-label">{{ 'Qtde' }}</label>
    <input class="form-control" name="Qtde" type="text" id="Qtde" value="{{ isset($ferramenta->Qtde) ? $ferramenta->Qtde : ''}}" >
    {!! $errors->first('Qtde', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('medida') ? 'has-error' : ''}}">
    <label for="medida" class="control-label">{{ 'Medida' }}</label>
    <select name="medida" class="form-control" id="medida" >
    @foreach (json_decode('{"polegadas":"Polegadas","milimetros":"Mil\u00edmetros","centimetros":"Centimetros"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($ferramenta->medida) && $ferramenta->medida == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('medida', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('situacao') ? 'has-error' : ''}}">
    <label for="situacao" class="control-label">{{ 'Situacao' }}</label>
    <select name="situacao" class="form-control" id="situacao" required>
    @foreach (json_decode('{"estoque":"Estoque","utilizando":"Utilizando","defeito":"Defeito"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($ferramenta->situacao) && $ferramenta->situacao == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('situacao', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('responsavel') ? 'has-error' : ''}}">
    <label for="responsavel" class="control-label">{{ 'Responsavel' }}</label>
    <textarea class="form-control" rows="5" name="responsavel" type="textarea" id="responsavel" >{{ isset($ferramenta->responsavel) ? $ferramenta->responsavel : ''}}</textarea>
    {!! $errors->first('responsavel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('desde') ? 'has-error' : ''}}">
    <label for="desde" class="control-label">{{ 'Desde' }}</label>
    <input class="form-control" name="desde" type="text" id="desde" value="{{ isset($ferramenta->desde) ? $ferramenta->desde : ''}}" >
    {!! $errors->first('desde', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Salvar' : 'Criar' }}">
</div>
