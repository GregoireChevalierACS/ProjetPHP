<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class SecondPageController
{
    public function sayHello(): Response
    {
        $message = "Hello !";

        return new Response(
            '<html><body> '.$message.'</body></html>'
        );
    }
}