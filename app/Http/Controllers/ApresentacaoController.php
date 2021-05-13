<?php

namespace App\Http\Controllers;

/* use Barryvdh\DomPDF\PDF; */

/* use Barryvdh\DomPDF\PDF as DomPDFPDF; */

use PDF;

class ApresentacaoController
{
    /**
     * Convertendo código HTML direto em pdf.(String)
     *
     * @return void
     */
    public function olaMundo()
    {
        $domPdf = PDF::loadHTML('<h1 style="color: red">Ola Treinaweb</h1>');

        return $domPdf->stream();
    }

    /**
     * Carregando views para conversão.(view)
     *
     * @return void
     */
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

/**
 * Convertendo diretamente arquivo HTML em pdf.(arquivo)
 *
 * @return void
 */
    public function wiki()
    {
        $domPdf = PDF::loadFile(public_path() . '/treinaweb-wiki.html');

       /* return $domPdf->stream(); */
          return $domPdf
       /* ->setPaper('a4', 'landscape') */
          ->setPaper('a3', 'landscape')
          ->save(public_path() . '/posso-colocar-um-nome.pdf')
          ->stream();
       /* return $domPdf->save(public_path() . '/posso-colocar-um-nome.pdf')
          ->download('posso-colocar-um-nome.pdf'); */
       /* return $domPdf->download('posso-colocar-um-nome.pdf'); */
    }
}
