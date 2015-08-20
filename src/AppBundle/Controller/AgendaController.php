<?php

namespace AppBundle\Controller;

use AppBundle\Models\Agenda;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AgendaController extends Controller
{
    private $response;
    private $connection;

    public function __construct()
    {
        $this->response = new JsonResponse();
    }

    public function indexAction()
    {
        $this->connection = $this->get('database_connection');
        $agenda = new Agenda($this->connection);
        return $this->render('Agenda/agenda.html.twig', array('telefonNumbers' => $agenda->getNumbers()));
    }

    public function saveTelefonNumber(Request $request)
    {
        $data = array(
            'name' => $request->request->get('name'),
            'telefon' => $request->request->get('telefon')
        );

        $this->response->setContent(array('response' => $data))->send();
    }


}
