<?php

declare(strict_types=1);

namespace PhpMyAdmin\SqlParser\Components;

use PhpMyAdmin\SqlParser\Component;

/**
 * `RENAME TABLE` keyword parser.
 */
final class RenameOperation implements Component
{
    /**
     * The old table name.
     *
     * @var Expression
     */
    public $old;

    /**
     * The new table name.
     *
     * @var Expression
     */
    public $new;

    /**
     * @param Expression $old old expression
     * @param Expression $new new expression containing new name
     */
    public function __construct(Expression|null $old = null, Expression|null $new = null)
    {
        $this->old = $old;
        $this->new = $new;
    }

    public function build(): string
    {
        return $this->old . ' TO ' . $this->new;
    }

    public function __toString(): string
    {
        return $this->build();
    }
}
