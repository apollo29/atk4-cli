<?php

namespace Apollo29\Atk4Cli;

use Apollo29\Atk4Cli\Command\Add;
use Apollo29\Atk4Cli\Command\Tables;
use SimpleCli\SimpleCli;

class Atk4Model extends SimpleCli
{
    public function getCommands(): array
    {
        return [
            'add' => Add::class,
            'tables' => Tables::class,
        ];
    }

    public function getVersion(): string
    {
        return '0.0.1';
    }
}