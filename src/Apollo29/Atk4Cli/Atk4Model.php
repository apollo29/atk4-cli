<?php

namespace Apollo29\Atk4Cli;

use Apollo29\Atk4Cli\Command\Add;
use SimpleCli\SimpleCli;
use SimpleCli\Widget\Table;

class Atk4Model extends SimpleCli
{
    public function getCommands(): array
    {
        return [
            'add' => Add::class,
            'list' => Table::class,
        ];
    }

    public function getVersion(): string
    {
        return '0.0.1';
    }
}