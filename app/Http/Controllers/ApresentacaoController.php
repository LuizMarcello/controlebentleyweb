<?php

namespace App\Http\Controllers;

/* use Barryvdh\DomPDF\PDF; */

/* use Barryvdh\DomPDF\PDF as DomPDFPDF; */

use PDF;

class ApresentacaoController
{
    public function olaMundo()
    {
        $domPdf = PDF::loadHTML('<h1 style="color: red">Ola Treinaweb</h1>');

        return $domPdf->stream();
    }

    public function cursos()
    {
        $cursos = [
            'php' => [
                'nome' => 'cursos PHP',
                'versao' => 8
            ],

            'java' => [
                'nome' => 'curso de Java',
                'versao' => 12
            ]
        ];

        $domPdf = PDF::loadView('cursosPdf', compact('cursos'));

        return $domPdf->stream();
    }
}
