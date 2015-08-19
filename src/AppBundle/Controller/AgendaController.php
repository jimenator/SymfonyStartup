<?php

namespace AppBundle\Controller;

use AppBundle\Models\Agenda;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AgendaController extends Controller
{
    public function indexAction()
    {
        $connection = $this->get('database_connection');
        $agenda = new Agenda($connection);
        return $this->render('Agenda/agenda.html.twig', array('telefonNumbers' => $agenda->getNumbers()));
    }
}
