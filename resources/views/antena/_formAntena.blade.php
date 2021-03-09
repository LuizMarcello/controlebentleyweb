@csrf

{{-- <input type="hidden" name="tipo" value="{{ $tipo }}"> --}}

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="notafiscal">Nota fiscal*</label>
    <div class="col-sm-10">
        <input type="text" id="notafiscal" name="notafiscal" required="required" maxlength="18"
            class="notafiscal form-control @error('banda') is-invalid @enderror">
        @error('notafiscal')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="datanota">Data da Nota*</label>
    <div class="col-sm-10">
        <input type="text" id="datanota" name="datanota" required="required" maxlength="18"
            class="datanota form-control @error('banda') is-invalid @enderror">
        @error('datanota')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="banda">Banda*</label>
    <div class="col-sm-10">
        <input type="text" id="banda" name="banda" {{-- required="required" --}} maxlength="18"
            class="banda form-control @error('banda') is-invalid @enderror">
        @error('banda')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="marca">Marca*</label>
    <div class="col-sm-10">
        <input type="text" id="marca" name="marca" {{-- required="required" --}} maxlength="18"
            class="marca form-control @error('marca') is-invalid @enderror">
        @error('marca')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="modelo">Modelo*</label>
    <div class="col-sm-10">
        <input type="text" id="modelo" name="modelo" {{-- required="required" --}} maxlength="18"
            class="modelo form-control @error('modelo') is-invalid @enderror">
        @error('modelo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="diametro">Diâmetro*</label>
    <div class="col-sm-10">
        <input type="text" id="diametro" name="diametro" {{-- required="required" --}} maxlength="18"
            class="diametro form-control @error('diametro') is-invalid @enderror">
        @error('diametro')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2" for="observacao">Observacao</label>
    <div class="col-sm-10">
        <input type="text" id="observacao" name="observacao" maxlength="500"
            class="form-control @error('observacao') is-invalid @enderror">
        @error('observacao')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2" for="situacao">Situação</label>
    <div class="col-sm-3">
        <select class="form-control" name="situacao" id="situacao">
            <option>Estoque</option>
            <option>Cliente</option>
            <option>Defeito</option>
            <option>Devolvido</option>
        </select>
    </div>
</div>

<button class="btn btn-primary" name="submit" value="" type="submit">Salvar</button>
