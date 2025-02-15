<?php

namespace App\Services\NFe;

use App\DTOs\NFe\NFeDTO;
use Illuminate\Http\Client\Response;

interface NFeServiceInterface
{
    /**
     * @param NFeDTO $data
     * @return App\Services\NFe\Response
     */
    public function getNFe(NFeDTO $data): Response;
}
