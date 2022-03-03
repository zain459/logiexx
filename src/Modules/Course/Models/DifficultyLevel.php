<?php

namespace Logixs\Modules\Course\Models;

use InvalidArgumentException;

class DifficultyLevel
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

        throw new InvalidArgumentException(sprintf('invalid difficulty level  value: %d', $id));
    }

    /**
     * @return Language[]
     */
    public static function all(): array
    {
        return [
            new self(1, 'Basic'),
            new self(2, 'Intermediate'),
            new self(3, 'Advanced'),
        ];
    }
}
