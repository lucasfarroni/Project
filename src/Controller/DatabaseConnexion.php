<?php

namespace App\Controller;


use Doctrine\ORM\EntityManager;

class DatabaseConnexion
{


    private function getDatabaseConnection(EntityManager $entityManager)
    {

        $pdo = $entityManager->getConnection();

        return $pdo;
    }
}