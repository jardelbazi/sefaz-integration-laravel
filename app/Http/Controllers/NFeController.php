<?php

namespace App\Http\Controllers;

use App\Adapters\NFe\NFeRequestAdapter;
use App\Http\Requests\ValidarChaveAcessoRequest;
use App\Services\NFe\NFeServiceInterface;

class NFeController extends Controller
{
    public function __construct(
        private NFeServiceInterface $nfeService,
    ) {}

    public function getNFe(ValidarChaveAcessoRequest $request)
    {
        return $this->nfeService->getNFe(new NFeRequestAdapter($request));
    }
}
