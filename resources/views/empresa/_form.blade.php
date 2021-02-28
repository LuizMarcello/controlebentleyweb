{{-- @csrf: Vai gerar um imput escondido com o token para ser validado.
     Se a requisição está vindo realmente da nossa aplicação. --}}
@csrf

<div class="form-group row">
    <label for="nome" class="col-form-label col-sm-2 required">Nome*</label>
    <div class="col-sm-10">
        <input type="text" name="nome" required="required" maxlength="255" class="form-control">
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2" for="razao_social">Razao Social</label>
    <div class="col-sm-10">
        <input type="text" id="razao_social" name="razao_social" maxlength="255" class="form-control">
    </div>
</div>






