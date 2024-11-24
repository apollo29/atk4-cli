<?php

namespace Apollo29\Atk4Cli\Command;

use SimpleCli\Command;
use SimpleCli\Options\Help;
use SimpleCli\Options\Verbose;
use SimpleCli\SimpleCli;

class Add implements Command
{
    use Help;
    use Verbose;

    public function run(SimpleCli $cli): bool
    {
        // TODO: Implement run() method.
        return true;
    }
}