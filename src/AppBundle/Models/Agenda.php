<?php
/**
 * Created by PhpStorm.
 * User: jimenator
 * Date: 19/08/15
 * Time: 19:47
 */

namespace AppBundle\Models;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Query\QueryBuilder;

class Agenda
{
    private $tablename;
    private $db;

    public function __construct(Connection $db)
    {
        $this->db = $db;
        $this->tablename = 'TelefonNumbers';
    }

    public function getNumbers()
    {
        $qb = $this->db->createQueryBuilder()
            ->select('*')
            ->from($this->tablename, 't');
        $res = $qb->execute();

        return $res->fetchAll();
    }
}