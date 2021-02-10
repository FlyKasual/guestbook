<?php
/*
 * This file is part of the Symfony package.
 *
 * (c) Johannes Nielsen <flykasual@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller for Conferences
 */
class ConferenceController extends AbstractController
{
    #[Route('/hello/{name}', name: 'homepage')]
    /**
     * Index functions
     *
     * @param string $name
     *
     * @return Response
     */
    public function index(string $name = ''): Response
    {
        $greet = '';
        if ($name) {
            $greet = sprintf("<p>Hello %s</p>", htmlspecialchars($name));
        }

        return new Response(<<<EOF
            <html>
                <head></head>
                <body>
                    $greet
                    <img src="/images/under-construction.gif" style="margin:0 auto; display: block;" />
                </body>
            </html>
            EOF
        );
    }
}
