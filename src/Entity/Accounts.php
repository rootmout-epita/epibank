<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AccountsRepository")
 */
class Accounts
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Client;

    /**
     * @ORM\Column(type="integer")
     */
    private $Balance;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Last_Operation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    //public $modification_balance;

    //public $is_added;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?string
    {
        return $this->Client;
    }

    public function setClient(string $Client): self
    {
        $this->Client = $Client;
        return $this;
    }

    public function getBalance(): ?int
    {
        return $this->Balance;
    }

    public function setBalance(int $Balance): self
    {
        $this->Balance = $Balance;

        return $this;
    }

    public function getLastOperation(): ?\DateTimeInterface
    {
        return $this->Last_Operation;
    }

    public function setLastOperation(\DateTimeInterface $Last_Operation): self
    {
        $this->Last_Operation = $Last_Operation;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getFormatedBalance(): string
    {
        $add = '';

        if($this->getBalance() >= 0){
            $add = '+';
        }
        return $add.number_format($this->getBalance(), 0, '', ' ');
    }

    public function getColorOfDisplay(): string
    {
        return $this->getBalance() >= 0 ? "text-success" : "text-danger";
    }

    public function isOutOfRange():bool
    {
        return abs($this->getBalance()) > 2000000000;
    }
}
