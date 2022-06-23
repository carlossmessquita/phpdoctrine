<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once 'vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory -> getEntityManager();

$id = 3;
$aluno = $entityManager -> getReference(Aluno::class, $id);

if (is_null($aluno)) {
    echo "Aluno inexistente." . PHP_EOL;
    exit();
}

$entityManager -> remove($aluno);
$entityManager -> flush();
