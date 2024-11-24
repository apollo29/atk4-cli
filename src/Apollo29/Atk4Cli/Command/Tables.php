<?php

namespace Apollo29\Atk4Cli\Command;

use Apollo29\Atk4Cli\Repository\Repository;
use Dotenv\Dotenv;
use PDO;
use SimpleCli\Attribute\Argument;
use SimpleCli\Command;
use SimpleCli\Options\Help;
use SimpleCli\Options\Verbose;
use SimpleCli\SimpleCli;
use SimpleCli\Widget\Cell;
use SimpleCli\Widget\Table;

class Tables implements Command
{
    use Help;
    use Verbose;

    public function run(SimpleCli $cli): bool
    {
        $dotenv = Dotenv::createImmutable(realpath($_SERVER["DOCUMENT_ROOT"]));
        $dotenv->load();

        $dns = 'mysql:host=' . $_ENV['MYSQL_HOST'] . ';dbname=' . $_ENV['MYSQL_DATABASE'];
        $repository = new Repository(new PDO($dns, $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASS']));
        $result = $repository->tables();

        $table = new Table($result);

        $cli->writeLine($table->format());

        return true;
    }
}