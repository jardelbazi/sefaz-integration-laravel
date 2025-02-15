<?php

namespace App\Services\NFe;

use App\DTOs\NFe\NFeDTO;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class NFeService implements NFeServiceInterface
{
    public function getNFe(NFeDTO $data): Response
    {
        try {
            $response = Http::get("https://sefaz.api/consulta/{$data->getKeyAccess()}");
            return $response->json();
        } catch (ConnectionException $e) {
            throw new ConnectionException($e);
        }
    }
}
