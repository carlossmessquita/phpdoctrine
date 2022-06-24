<?php

use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Entity\Aluno;

require_once 'vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory -> getEntityManager();

$alunoRepository = $entityManager -> getRepository(Aluno::class);
/** @var Aluno[] $alunoList  */
$alunoList = $alunoRepository -> findAll();

foreach ($alunoList as $aluno) {
    $telefones = $aluno 
    -> getTelefones() 
    -> map(function (Telefone $telefone) {
        return $telefone -> getNumero();
    }) 
    -> toArray();
    $telefones = ['telefone1', 'telefone2'];
    echo "ID: {$aluno -> getId()}\nNome: {$aluno -> getNome()}\n";
    echo "Telefones: " . implode(', ', $telefones);
}