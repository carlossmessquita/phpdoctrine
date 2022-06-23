<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once 'vendor/autoload.php';




$aluno = new Aluno(0, "...");


$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory -> getEntityManager();

// Mantém a variável/entidade em observação para persistência;
$entityManager -> persist($aluno);

$aluno -> setNome("Vitor");
$aluno -> setNome("C. Vitor");
$aluno -> setNome("C. Mesquita");


$entityManager -> flush();

