<?php
declare(strict_types=1);

namespace CleanPHP\Invoicer\Domain\Entity;

/**
 * Class AbstractEntity
 * @package CleanPHP\Invoicer\Domain\Entity
 */
abstract class AbstractEntity
{
    protected int $id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
}