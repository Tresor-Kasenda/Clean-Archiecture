<?php
declare(strict_types=1);

namespace CleanPHP\Invoicer\Domain\Entity;

/**
 * Class Customer
 * @package CleanPHP\Invoicer\Domain\Entity
 */
class Customer extends AbstractEntity
{
    protected string $name;

    protected string $email;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): Customer
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email): Customer
    {
        $this->email = $email;
        return $this;
    }
}