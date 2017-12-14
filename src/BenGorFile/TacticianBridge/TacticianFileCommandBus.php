<?php

/*
 * This file is part of the BenGorFile package.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 * (c) Gorka Laucirica <gorka.lauzirika@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenGorFile\TacticianBridge;

use BenGorFile\File\Infrastructure\Application\FileCommandBus;
use League\Tactician\CommandBus;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class TacticianFileCommandBus implements FileCommandBus
{
    private $tactician;

    public function __construct(CommandBus $tactician)
    {
        $this->tactician = $tactician;
    }

    public function handle($aCommand)
    {
        $this->tactician->handle($aCommand);
    }
}
