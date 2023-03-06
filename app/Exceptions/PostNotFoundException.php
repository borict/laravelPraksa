<?php

namespace App\Exceptions;

use Exception;

class PostNotFoundException extends Exception
{
    public function report()
    {
    }
    public function render()
    {
        return view('errors.post-not-found');
    }
}
