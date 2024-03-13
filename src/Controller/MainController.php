<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
    #[Route('/', name: 'homepage')]
    public function number(): Response
    {
        return new Response(<<<EOF
            <html>
                <body>
                    <img src="/images/not-found-404.gif">
                </body>
            </html>
            EOF
        );
    }
}