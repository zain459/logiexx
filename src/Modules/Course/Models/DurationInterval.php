<?php

namespace Logixs\Modules\Course\Models;

use InvalidArgumentException;

class DurationInterval
{
    /** @var int * */
    private $id;

    /** @var string * */
    private $name;

    private function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public static function fromId(int $id): self
    {
        $items = self::all();

        foreach ($items as $item) {
            if ($item->id() === $id) {
                return $item;
            }
        }

        throw new InvalidArgumentException(sprintf('invalid duration interval  value: %d', $id));
    }

    /**
     * @return Language[]
     */
    public static function all(): array
    {
        return [
            new self(1, '0-7 days'),
            new self(2, '7-14 days'),
            new self(3, '14-30 days'),
            new self(4, '30-90 days'),
            new self(5, '90-180 days'),
            new self(6, '180-365 days'),
            new self(7, '365+ days'),
        ];
    }
}
