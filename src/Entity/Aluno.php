<?php

namespace Alura\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * 
 *@Entity
 */
class Aluno
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private ?int $id;
    /**
     * @Column(type="string")
     */
    private string $nome;
    /**
     * @OneToMany(targetEntity="Telefone", mappedBy="Aluno", cascade=("remove", "persist"))
     */
    private $telefones;

    public function __construct()
    {
        $this -> telefones = new ArrayCollection();
    }

    public function getId(): int 
    {
        return $this -> id;
    }

    public function getNome(): string
    {
        return $this -> nome;
    }

    public function setId(int $id): void
    {
        $this -> id = $id;
    }

    public function setNome(string $nome): void
    {
        $this -> nome = $nome;
    }

    public function addTelefone(Telefone $telefone): self
    {
        $this -> telefones -> add($telefone);
        $telefone -> setAluno($this);
        return $this;
    }

    public function getTelefones(): Collection
    {
        return $this -> telefones;
    }
}