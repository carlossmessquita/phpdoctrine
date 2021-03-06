<?php

namespace Alura\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\ManyToOne;
use Alura\Doctrine\Entity\Aluno;


/**
 *  @Entity 
 */
class Telefone
{
    /**
     * 
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private ?int $id;
    private string $numero;

    /**
     * @ManyToOne(targetEntity="Aluno")
     */
    private Aluno $aluno;

    public function setId(int $id): self
    {
        $this -> id = $id;
        return $this;
    }

    public function getId(): int
    {
        return $this -> id;
    }

    public function setNumero(string $numero): self
    {
        $this -> numero = $numero;
        return $this;
    }

    public function getNumero(): string
    {
        return $this -> numero;
    }
    
    public function setAluno(Aluno $aluno): self
    { 
        $this -> aluno = $aluno;
        return $this;
    }

    public function getAluno(): Aluno
    {
        return $this -> aluno;
    }
}
