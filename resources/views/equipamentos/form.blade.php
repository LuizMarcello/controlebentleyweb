<div class="form-group {{ $errors->has('tipodeequipamento') ? 'has-error' : ''}}">
    <label for="tipodeequipamento" class="control-label">{{ 'Tipo de equipamento' }}</label>
    <select name="tipodeequipamento" class="form-control" id="tipodeequipamento" >
    @foreach (json_decode('{"antena":"Antena","cabo":"Cabo","fonte":"Fonte","groove":"Groove","lnb":"Lnb","ilnb":"Ilnb","modem":"Modem","roteador":"Roteador","tria":"Tria"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($equipamento->tipodeequipamento) && $equipamento->tipodeequipamento == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('tipodeequipamento', '<p class="help-block">:message</p>') !!}
</div>
{{-- <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($equipamento->user_id) ? $equipamento->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div> --}}
<div class="form-group {{ $errors->has('notafiscal') ? 'has-error' : ''}}">
    <label for="notafiscal" class="control-label">{{ 'Nota fiscal' }}</label>
    <input class="form-control" name="notafiscal" type="text" id="notafiscal" value="{{ isset($equipamento->notafiscal) ? $equipamento->notafiscal : ''}}" required>
    {!! $errors->first('notafiscal', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('datanota') ? 'has-error' : ''}}">
    <label for="datanota" class="control-label">{{ 'Data da nota' }}</label>
    <input class="form-control" name="datanota" type="text" id="datanota" value="{{ isset($equipamento->datanota) ? $equipamento->datanota : ''}}" required>
    {!! $errors->first('datanota', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('banda') ? 'has-error' : ''}}">
    <label for="banda" class="control-label">{{ 'Banda' }}</label>
    <input class="form-control" name="banda" type="text" id="banda" value="{{ isset($equipamento->banda) ? $equipamento->banda : ''}}" required>
    {!! $errors->first('banda', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('qtde') ? 'has-error' : ''}}">
    <label for="qtde" class="control-label">{{ 'Quantidade' }}</label>
    <input class="form-control" name="qtde" type="text" id="qtde" value="{{ isset($equipamento->qtde) ? $equipamento->qtde : ''}}" >
    {!! $errors->first('qtde', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="control-label">{{ 'Tipo' }}</label>
    <input class="form-control" name="tipo" type="text" id="tipo" value="{{ isset($equipamento->tipo) ? $equipamento->tipo : ''}}" required>
    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('diametro') ? 'has-error' : ''}}">
    <label for="diametro" class="control-label">{{ 'Diâmetro' }}</label>
    <input class="form-control" name="diametro" type="text" id="diametro" value="{{ isset($equipamento->diametro) ? $equipamento->diametro : ''}}" required>
    {!! $errors->first('diametro', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('marca') ? 'has-error' : ''}}">
    <label for="marca" class="control-label">{{ 'Marca' }}</label>
    <input class="form-control" name="marca" type="text" id="marca" value="{{ isset($equipamento->marca) ? $equipamento->marca : ''}}" required>
    {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('modelo') ? 'has-error' : ''}}">
    <label for="modelo" class="control-label">{{ 'Modelo' }}</label>
    <input class="form-control" name="modelo" type="text" id="modelo" value="{{ isset($equipamento->modelo) ? $equipamento->modelo : ''}}" required>
    {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('voltagem') ? 'has-error' : ''}}">
    <label for="voltagem" class="control-label">{{ 'Voltagem' }}</label>
    <input class="form-control" name="voltagem" type="text" id="voltagem" value="{{ isset($equipamento->voltagem) ? $equipamento->voltagem : ''}}" required>
    {!! $errors->first('voltagem', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('serial') ? 'has-error' : ''}}">
    <label for="serial" class="control-label">{{ 'Serial' }}</label>
    <input class="form-control" name="serial" type="text" id="serial" value="{{ isset($equipamento->serial) ? $equipamento->serial : ''}}" required>
    {!! $errors->first('serial', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('macaddress') ? 'has-error' : ''}}">
    <label for="macaddress" class="control-label">{{ 'Endereço mac' }}</label>
    <input class="form-control" name="macaddress" type="text" id="macaddress" value="{{ isset($equipamento->macaddress) ? $equipamento->macaddress : ''}}" required>
    {!! $errors->first('macaddress', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('situacao') ? 'has-error' : ''}}">
    <label for="situacao" class="control-label">{{ 'Situação' }}</label>
    <select name="situacao" class="form-control" id="situacao" >
    @foreach (json_decode('{"estoque":"No estoque","cliente":"Com cliente","defeito":"Com defeito","manutencao":"Em manuten\u00e7\u00e3o","devolvido":"Devolvido"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($equipamento->situacao) && $equipamento->situacao == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('situacao', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('observacao') ? 'has-error' : ''}}">
    <label for="observacao" class="control-label">{{ 'Observação' }}</label>
    <textarea class="form-control" rows="5" name="observacao" type="textarea" id="observacao" >{{ isset($equipamento->observacao) ? $equipamento->observacao : ''}}</textarea>
    {!! $errors->first('observacao', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Atualizar' : 'Criar' }}">
</div>
