<?php

namespace App\Controllers;

class Migrate extends BaseController
{
    public function index()
    {

        $migrate = \Config\Services::migrations();

        try
        {
                $migrate->latest();
        }
        catch (\Throwable $e)
        {
                // Do something with the error here...
        }

    }
}
