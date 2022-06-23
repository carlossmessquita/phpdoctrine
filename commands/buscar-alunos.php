<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once 'vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory -> getEntityManager();

$alunosRepository = $entityManager -> getRepository(Aluno::class);
/** @var Aluno[] $alunoList */
$alunoList = $alunosRepository -> findAll();

foreach ($alunoList as $aluno) {
    echo "=> ID: {$aluno -> getId()} - Nome: {$aluno -> getNome()}; ". PHP_EOL;
}
