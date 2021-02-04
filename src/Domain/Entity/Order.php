<?php
declare(strict_types=1);

namespace CleanPHP\Invoicer\Domain\Entity;

/**
 * Class Order
 * @package CleanPHP\Invoicer\Domain\Entity
 */
class Order
{
    protected ?Customer $customer;

    protected ?int $orderNumber;

    protected ?string $description;

    protected ?int $total;

    /**
     * @return Customer|null
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer|null $customer
     * @return $this
     */
    public function setCustomer(?Customer $customer): self
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getOrderNumber(): ?int
    {
        return $this->orderNumber;
    }

    /**
     * @param int|null $orderNumber
     * @return $this
     */
    public function setOrderNumber(?int $orderNumber): self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return $this
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * @param int|null $total
     * @return $this
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }

}