<?php
declare(strict_types=1);

namespace CleanPHP\Invoicer\Domain\Entity;

/**
 * Class Invoice
 * @package CleanPHP\Invoicer\Domain\Entity
 */
class Invoice
{
    protected Order $order;

    protected \DateTime $invoiceDate;

    protected ?int $total;

    /**
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->order;
    }

    /**
     * @param Order $order
     * @return $this
     */
    public function setOrder(Order $order): self
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate(): \DateTime
    {
        return $this->invoiceDate;
    }

    /**
     * @param \DateTime $invoiceDate
     * @return $this
     */
    public function setInvoiceDate(\DateTime $invoiceDate): self
    {
        $this->invoiceDate = $invoiceDate;
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