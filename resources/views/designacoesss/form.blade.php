<div class="form-group row {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-form-label col-sm-2">{{ 'Name' }}</label>
        <div class="col-sm-10">
           <input class="form-control" name="name" type="text" id="name" value="{{ isset($designacoesss->name) ? $designacoesss->name : ''}}" required>
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="form-group row {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-form-label col-sm-2">{{ 'Email' }}</label>
        <div class="col-sm-10">
           <input class="form-control" name="email" type="text" id="email" value="{{ isset($designacoesss->email) ? $designacoesss->email : ''}}" required>
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="form-group row {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="col-form-label col-sm-2">{{ 'Password' }}</label>
        <div class="col-sm-10">
           <input class="form-control" name="password" type="text" id="password" value="{{ isset($designacoesss->password) ? $designacoesss->password : ''}}" required>
            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Atualizar' : 'Criar' }}">
</div>
