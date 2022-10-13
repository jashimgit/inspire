<?php

namespace Jashimgit\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt() {
        $respose = Http::get('https://inspiration.goprogram.ai/');
        return $respose['quote'] . ' -' . $respose['author'];
    }
}