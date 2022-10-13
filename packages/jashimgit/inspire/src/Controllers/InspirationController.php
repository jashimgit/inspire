<?php 

namespace Jashimgit\Inspire\Controllers;

use Jashimgit\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire)
    {
        # code...
        $quote = $inspire->justDoIt();
        return view('inspire::index', $quote);
    }
}