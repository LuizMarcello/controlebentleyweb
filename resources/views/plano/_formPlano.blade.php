@csrf

{{-- <input type="hidden" name="tipo" value="{{ $tipo }}"> --}}

{{-- Este helper "old()" recebe um segundo argumento para valor padrão, caso ele não tenha
     um êrro de validação, ou seja, quando não tem um dado de validação antigo, exiba então
     o valor que vem do banco de dados. Daí então usamos para edição.
     O @(arroba) esconde êrros no php, no caso, a variável $empresa é injetada somente no
     edit, mas este mesmo formulário é usado tbém pelo create, só que o controller, neste caso,
     não injeta esta variável. --}}
<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="nome">Nome do plano</label>
    <div class="col-sm-5">
        <input value="{{ old('nome', @$plano->nome) }}" type="text" id="nome" name="nome" required="required" maxlength="18"
            class="nome form-control @error('nome') is-invalid @enderror">
        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="cir">Cir</label>
    <div class="col-sm-5">
        <select name="cir" class="form-control" id="cir">
            @foreach (json_decode('{" 16:1":"16:1","10:1":"10:1"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($plano->cir) && $plano->cir == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
    </div>
</div>

{{-- <div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="cir">Cir</label>
    <div class="col-sm-10">
        <input value="{{ old('cir', @$plano->cir) }}" type="text" id="cir" name="cir" required="required" maxlength="18"
            class="cir form-control @error('cir') is-invalid @enderror">
        @error('cir')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div> --}}

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="banda">Banda</label>
    <div class="col-sm-5">
        <select name="banda" class="form-control" id="banda">
            @foreach (json_decode('{" ka":"ka","ku":"ku"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($plano->banda) && $plano->banda == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
    </div>
</div>


{{-- <div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="banda">Banda</label>
    <div class="col-sm-10">
        <input value="{{ old('banda', @$plano->banda) }}" type="text" id="banda" name="banda" --}} {{-- required="required" --}} {{-- maxlength="18"
            class="banda form-control @error('banda') is-invalid @enderror">
        @error('banda')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div> --}}

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="velocmaxdown">Veloc Máxima Down</label>
    <div class="col-sm-5">
        <select name="velocmaxdown" class="form-control" id="velocmaxdown">
            @foreach (json_decode('{" 1mbps":"1 Mbps","2mbps":"2 Mbps","4mbps":"4 Mbps","6mbps":"6 Mbps","10mbps":"10 Mbps"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($plano->velocmaxdown) && $plano->velocmaxdown == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
    </div>
</div>

{{-- <div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="velocmaxdown">Veloc Máxima Down</label>
    <div class="col-sm-10">
        <input value="{{ old('velocmaxdown', @$plano->velocmaxdown) }}" type="text" id="velocmaxdown" name="velocmaxdown" required="required" maxlength="18"
            class="velocmaxdown form-control @error('velocmaxdown') is-invalid @enderror">
        @error('velocmaxdown')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div> --}}

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="velocmaxup">Veloc Máxina Up</label>
    <div class="col-sm-10">
        <input value="{{ old('velocmaxup', @$plano->velocmaxup) }}" type="text" id="velocmaxup" name="velocmaxup" required="required" maxlength="18"
            class="velocmaxup form-control @error('velocmaxup') is-invalid @enderror">
        @error('velocmaxup')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="velocmindown">Veloc Mínima Down</label>
    <div class="col-sm-10">
        <input value="{{ old('velocmindown', @$plano->velocmindown) }}" type="text" id="velocmindown" name="velocmindown" required="required" maxlength="18"
            class="velocmindown form-control @error('velocmindown') is-invalid @enderror">
        @error('velocmindown')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="velocminup">Veloc Mínima Up</label>
    <div class="col-sm-10">
        <input value="{{ old('velocminup', @$plano->velocminup) }}" type="text" id="velocminup" name="velocminup" required="required" maxlength="18"
            class="velocminup form-control @error('velocminup') is-invalid @enderror">
        @error('velocminup')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="equipamento">Equipamento</label>
    <div class="col-sm-10">
        <input value="{{ old('equipamento', @$plano->equipamento) }}" type="text" id="equipamento" name="equipamento" required="required" maxlength="18"
            class="equipamento form-control @error('equipamento') is-invalid @enderror">
        @error('equipamento')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="valordecusto">Valor de Custo</label>
    <div class="col-sm-10">
        <input value="{{ old('valordecusto', @$plano->valordecusto) }}" type="text" id="valordecusto" name="valordecusto" {{-- required="required" --}} maxlength="18"
            class="valordecusto form-control @error('valordecusto') is-invalid @enderror">
        @error('valordecusto')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="valormensal">Valor Mensal</label>
    <div class="col-sm-10">
        <input value="{{ old('valormensal', @$plano->valormensal) }}" type="text" id="valormensal" name="valormensal" required="required" maxlength="18"
            class="valormensal form-control @error('valormensal') is-invalid @enderror">
        @error('valormensal')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2" for="observacao">Observação</label>
    <div class="col-sm-10">
        <input value="{{ old('observacao', @$plano->observacao) }}" type="text" id="observacao" name="observacao" maxlength="500"
            class="form-control @error('observacao') is-invalid @enderror">
        @error('observacao')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2" for="situacao">Situação atual</label>
    <div class="col-sm-3">
        <input value="{{ old('situacao', @$plano->situacao) }}" type="text" id="situacao" name="situacao" class="form-control">
        <select class="form-control" name="situacao" id="situacao">
            <option value="{{ @$plano->situacao }}">Alterar situação</option>
            <option>Ativo</option>
            <option>Em espera</option>
            <option>Suspenso</option>
            <option>Inativo</option>
        </select>
    </div>
</div>

<button class="btn btn-primary" name="submit" value="" type="submit">Salvar</button>
