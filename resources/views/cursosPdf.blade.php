<h1>Lista de Cursos</h1>

<?php
/* var_dump($cursos); */
?>

<table class="table">
    <thead>
        <tr>
            <th>Curso</th>
            <th>Versao</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cursos as $curso)
            <tr>
                <td>{{ $curso['nome'] }}</td>
                <td>{{ $curso['versao'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
