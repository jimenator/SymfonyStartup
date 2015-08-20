<?php

namespace AppBundle\Controller;

use AppBundle\Models\Agenda;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AgendaController extends Controller
{
    private $response;
    private $request;

    public function __construct()
    {
        $this->response = new Response('Content', Response::HTTP_OK, array('content-type' => 'application/json'));
        //$this->request = $this->get('request');
    }

    public function indexAction()
    {
        $connection = $this->get('database_connection');
        $agenda = new Agenda($connection);
        return $this->render('Agenda/agenda.html.twig', array('telefonNumbers' => $agenda->getNumbers()));
    }

    public function saveTelefonNumber(Request $request)
    {
        $form = $this->createFormBuilder(array())
            ->add('name', 'text')
            ->add('telefonNumber', 'number')
            ->getForm();

        $form->handleRequest($request);
        $data = $form->getData();

        $this->sendResponse($request, array('response' => $data));
    }

    private function sendResponse(Request $request, array $data)
    {
        $this->response->setContent($data);
        $this->response->prepare($request);
        $this->response->send();
    }
}
