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

<br>

{{ var_dump($posts) }}

<br>

{{-- Impressão de json --}}
@json($posts)

<script>
    var posts = @json($posts);
    console.log(posts);

</script>

<br>

{{-- Para que outros frameworks javascripts consigam interpretar,
     e o blade não interpretará mais, apenas imprimirá o nome da
     propriedade. Coloca-se o arroba antes --}}
@{{ name }}
@{{ age }}
@{{ email }}

<br>

{{-- ou usando esta diretiva, quando se tem várias situações
     a serem interpretadas pelo javascript: --}}
@verbatim
    {{ name }}
    {{ age }}
    {{ email }}
@endverbatim

<br>

{{-- O blade possui esta diretiva para declarar qualquer código
     php, ao invés das tags normais do php: --}}
@php
    $comments = -1;
   /*  $category = 'php-basico'; */
  /*   $category = 'php-avancado'; */
    $category = 'c#-avancado';
    $tag = '';
@endphp

{{-- comentário do blade--}} {{-- Comentário do blade, não chega ao front-end --}}
<!-- comentário do html --> {{-- Comentário do html, aparecerá no front-end --}}

<br>

{{-- Diretiva blade de estrutura condicional "if" --}}
@if ($comments === 1)
    <p>Temos 1 comentário</p>
@elseif ($comments > 1)
    <p>Temos {{ $comments }} comentários</p>
@elseif ($comments < 0)
    <p>Número de comentários inválido</p>
@else
    <p>Não temos nenhum comentário</p>
@endif

<br>

{{-- Condicional blade "unless" verifica se a condição é falsa --}}
@unless ($comments > 0)
    <p>Numero de comentários inválido</p>
@endunless

<br>

{{-- Diretiva blade switch/case: --}}
@switch($category)
    @case('php-basico')
        <p>Muito bom começar seus estudos em PHP!!!</p>
        @break
    @case('php-avancado')
        <p>Legal você voltar a estudar o PHP!!!</p>
        @break
    @default
        <p>Muito bom ter você em nosso blog!!!</p>
@endswitch

<br>

{{-- Diretiva blade para verificar se a variável existe(isset)
     e se não está vazia(empty) --}}
@isset($tag)
    <p>a tag do artigo é: {{ $tag }}</p>
@endisset

@empty($tag)
    <p>Esse artigo não possui tegs</p>
@endempty

<br>

{{-- Diretiva blade para mostrar informações para
     usuários logados ou visitantes --}}
{{-- Helper auth() verifica se o usuários está logado atualmente: --}}
@auth
    <p>Bem Vindo: {{ auth()->user()->name }}</p>
@endauth

{{-- Exibir informações para usuário visitante --}}
@guest
    <p>Conheça as vantagens de se cadastrar em nosso blog</p>
@endguest


