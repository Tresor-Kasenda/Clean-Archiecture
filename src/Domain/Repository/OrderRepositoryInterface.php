<?php
declare(strict_types=1);

namespace CleanPHP\Invoicer\Domain\Repository;

/**
 * Class OrderRepositoryInterface
 * @package CleanPHP\Invoicer\Domain\Repository
 */
interface OrderRepositoryInterface extends RepositoryInterface
{
    public function getUninvoicedOrders();
}