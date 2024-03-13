<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GreetingController
{
    #[Route('/hello/{name}', name: 'hello')]
    public function hello(string $name = ''): Response
    {
        $greet = '';
        if ($name !== '') {
            $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
        }
        return new Response(<<<EOF
            <html>
                <body>
                    $greet
                </body>
            </html>
            EOF
        );
    }
}