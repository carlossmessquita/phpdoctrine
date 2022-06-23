<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once 'vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory -> getEntityManager();
$alunoRepository = $entityManager -> getRepository(Aluno::class);

$id = 1;
$novoNome = "Carlos Silva";

// Tem o mesmo efeito, mas pegando apenas um por um;
// $entityManager -> find(Aluno::class, $id);

$aluno = $alunoRepository -> find($id);
$aluno -> setNome($novoNome);

$entityManager -> flush();
