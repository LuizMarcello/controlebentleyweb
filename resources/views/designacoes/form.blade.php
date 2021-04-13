{{-- <div class="form-group row {{ $errors->has('banda') ? 'has-error' : '' }}">
        <label for="banda" class="col-form-label col-sm-2">{{ 'Banda' }}</label>
        <div class="col-sm-10">
            <select name="banda" class="form-control" id="banda">
                @foreach (json_decode('{" ka":"Ka","ku":"ku"}', true) as $optionKey => $optionValue)
                    <option value="{{ $optionKey }}"
                        {{ isset($designaco->banda) && $designaco->banda == $optionKey ? 'selected' : '' }}>
                        {{ $optionValue }}</option>
                @endforeach
            </select>
            {!! $errors->first('banda', '<p class="help-block">:message</p>') !!}
        </div>
    </div> --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
      $(document).ready(function() {
        $("#1,#2").hide();
        $("#banda").change(function() {
        var num = parseInt($('#banda option:selected').val());
            for (var i = 0; i<=num; i++) {
                $("#" + i).show();
            }
        });
    });
</script>

{{-- <script src="{{ asset('jq/JQuery.js') }}"></script> --}}

<div class="form-group row {{ $errors->has('banda') ? 'has-error' : '' }}">
    <label for="banda" class="col-form-label col-sm-2">{{ 'Banda' }}</label>
    <div class="col-sm-10">
        <select id="banda" name="banda" class="form-control">
            {{-- <option value="">Selecione</option> --}}
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
        {!! $errors->first('banda', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div id="1" class="form-group row {{ $errors->has('modem') ? 'has-error' : '' }}">
    <label for="modem" class="col-form-label col-sm-2">{{ 'Modem' }}</label>
    <div class="col-sm-10">
        <select name="modem" class="form-control" id="modem">
            @foreach (json_decode('{"buscarEmModens1":"buscarEmModens1","buscarEmModens2":"buscarEmModens2","buscarEmModens3":"buscarEmModens3"}',
                true) as $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($designaco->modem) && $designaco->modem == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('modem', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div id="2" class="form-group row {{ $errors->has('antena') ? 'has-error' : '' }}">
    <label for="antena" class="col-form-label col-sm-2">{{ 'Antena' }}</label>
    <div class="col-sm-10">
        <select name="antena" class="form-control" id="antena">
            @foreach (json_decode('{"buscarEmAntenas1":"buscarEmAntenas1","buscarEmAntenas2":"buscarEmAntenas2","buscarEmAntenas3":"buscarEmAntenas3"}',
                true) as $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($designaco->antena) && $designaco->antena == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('antena', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div id="3" class="form-group row {{ $errors->has('lnb') ? 'has-error' : '' }}">
    <label for="lnb" class="col-form-label col-sm-2">{{ 'Lnb' }}</label>
    <div class="col-sm-10">
        <select name="lnb" class="form-control" id="lnb">
            @foreach (json_decode('{"buscarEmLnbs1":"buscarEmLnbs1","buscarEmLnbs2":"buscarEmLnbs2","buscarEmLnbs3":"buscarEmLnbs3"}', true)
                as $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($designaco->lnb) && $designaco->lnb == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('lnb', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div id="4" class="form-group row {{ $errors->has('buctransmitter') ? 'has-error' : '' }}">
    <label for="buctransmitter" class="col-form-label col-sm-2">{{ 'Buc transmitter' }}</label>
    <div class="col-sm-10">
        <select name="buctransmitter" class="form-control" id="buctransmitter">
            @foreach (json_decode('{"buscamEmBucTransmitters1":"buscamEmBucTransmitters1","buscamEmBucTransmitters2":"buscamEmBucTransmitters2","buscamEmBucTransmitters3":"buscamEmBucTransmitters3"}',
                true) as $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($designaco->buctransmitter) && $designaco->buctransmitter == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('buctransmitter', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('ilnb') ? 'has-error' : '' }}">
    <label for="ilnb" class="col-form-label col-sm-2">{{ 'Ilnb' }}</label>
    <div class="col-sm-10">
        <select name="ilnb" class="form-control" id="ilnb">
            @foreach (json_decode('{"buscarEmIlnbs1":"buscarEmIlnbs1","buscarEmIlnbs2":"buscarEmIlnbs2","buscarEmIlnbs3":"buscarEmIlnbs3"}',
                true) as $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($designaco->ilnb) && $designaco->ilnb == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('ilnb', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('tria') ? 'has-error' : '' }}">
    <label for="tria" class="col-form-label col-sm-2">{{ 'Tria' }}</label>
    <div class="col-sm-10">
        <select name="tria" class="form-control" id="tria">
            @foreach (json_decode('{"buscarEmTrias1":"buscarEmTrias1","buscarEmTrias2":"buscarEmTrias2","buscarEmTrias3":"buscarEmTrias3"}',
                true) as $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($designaco->tria) && $designaco->tria == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('tria', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Atualizar' : 'Criar' }}">
</div>
