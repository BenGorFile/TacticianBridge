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

namespace spec\BenGorFile\TacticianBridge;

use BenGorFile\File\Application\Command\Upload\UploadFileCommand;
use BenGorFile\File\Infrastructure\Application\FileCommandBus;
use BenGorFile\TacticianBridge\TacticianFileCommandBus;
use League\Tactician\CommandBus;
use PhpSpec\ObjectBehavior;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class TacticianFileCommandBusSpec extends ObjectBehavior
{
    function let(CommandBus $commandBus)
    {
        $this->beConstructedWith($commandBus);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(TacticianFileCommandBus::class);
    }

    function it_implements_file_command_bus()
    {
        $this->shouldImplement(FileCommandBus::class);
    }

    function it_handles_a_command(CommandBus $commandBus, UploadFileCommand $command)
    {
        $commandBus->handle($command)->shouldBeCalled();

        $this->handle($command);
    }
}
