<?php
declare(strict_types=1);

namespace CleanPHP\Invoicer\Domain\Repository;

/**
 * Interface RepositoryInterface
 * @package CleanPHP\Invoicer\Domain\Repository
 */
interface RepositoryInterface
{
    public function getById(int $id);
    public function getAll();
    public function persist($entity);
    public function begin();
    public function commit();
}