<?php

namespace App\Adapters\NFe;

use App\DTOs\NFe\NFeDTO;
use Illuminate\Http\Request;

class NFeRequestAdapter extends NFeDTO
{
    public function __construct(
        private Request $request,
    ) {
        parent::__construct(
            keyAccess: $this->request->input('keyAccess'),
        );
    }
}
