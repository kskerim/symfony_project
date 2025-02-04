<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    #[Route('/mmi/LuckyNumber/{year}', name: 'lucky_number')]
    public function number($year = 2024): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.' pour l\'année '.$year.'</body></html>'
        );
    }
}

