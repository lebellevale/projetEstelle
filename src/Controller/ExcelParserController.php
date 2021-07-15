<?php

declare(strict_types=1);

namespace App\Controller;



use App\Excel\ExcelParser;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ExcelParserController
{
    /**
     * @Route(path="/upload-excel", name="xlsx")
     */
    public function xlsx(ExcelParser $exel, Request $request) : Response
    {
        $exel->xlsx($request);
        return new Response('ok');
    }

}