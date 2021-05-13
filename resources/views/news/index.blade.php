{{-- Assim é impressão do blade "escapada" --}}
{{-- escapa o conteúdo e remove o html --}}
{{-- imprime as tags html/javascript como se fossem conteúdo --}}
{{ $name }}
{{ $description }}
<br>
{{ $name . ' ' . $description }}
<br>
{{-- Assim é impressão do blade "não-escapada" --}}
{{-- São interpretadas as tags html e javascript --}}
{{-- É mais perigoso --}}
{!! $name !!}
{!! $description !!}


