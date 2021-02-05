<?php
declare(strict_types=1);

namespace CleanPHP\Invoicer\Domain\Service;

use CleanPHP\Invoicer\Domain\Factory\InvoiceFactory;
use CleanPHP\Invoicer\Domain\Repository\OrderRepositoryInterface;

/**
 * Class InvoicingService
 * @package CleanPHP\Invoicer\Domain\Service
 */
class InvoicingService
{
    /**
     * @var OrderRepositoryInterface
     */
    private OrderRepositoryInterface $order;

    /**
     * @var InvoiceFactory
     */
    private InvoiceFactory $factory;

    public function __construct(
        OrderRepositoryInterface $order,
        InvoiceFactory $factory
    )
    {
        $this->order = $order;
        $this->factory = $factory;
    }

    public function generateInvoices(): array
    {
        $order = $this->order->getUninvoicedOrders();
        $invoices = [];
        foreach ($order as $orders)
        {
            $invoices[] = $this->factory->createFromOrder($orders);
        }
        return $invoices;
    }
}