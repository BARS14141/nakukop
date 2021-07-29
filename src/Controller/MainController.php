<?php

namespace App\Controller;

use App\Service\Services\GRPC;
use App\Service\Services\Http;
use App\Service\Services\Rest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(Request $request, Rest $rest, GRPC $grpc, Http $http): Response
    {
        if (
            $request->isMethod('post')
            && ($service = $request->get('service'))
            && ($settingName = $request->get('fieldName'))
            && ($value = $request->get('value'))
        ) {
            switch ($service) {
                case 'rest':
                    $rest->setSetting($settingName, $value);
                    break;
                case 'grpc':
                    $grpc->setSetting($settingName, $value);
                    break;
                case 'http':
                    $http->setSetting($settingName, $value);
                    break;
            }
        }
        return $this->render('main.html.twig', [
            'rest' => $rest->getSettings(),
            'grpc' => $grpc->getSettings(),
            'http' => $http->getSettings(),
        ]);
    }
}
