<?php

namespace Logixs\Modules\Site\Enrollment\Models;

use InvalidArgumentException;

class EmploymentStatus
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

    public static function formId(int $id): self
    {
        $items = self::all();
        foreach ($items as $item) {
            if ($item->id() == $id) {
                return $item;
            }
        }
        throw new InvalidArgumentException(sprintf('invalid employment status value: %d', $id));
    }

    /**
     * @return EmploymentStatus[]
     */
    public static function all(): array
    {
        return [
            new self(1, 'yes'),
            new self(2, 'No'),
        ];
    }
}
