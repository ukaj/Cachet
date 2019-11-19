<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Commands\Subscriber;

use AltThree\TestBench\CommandTrait;
use App\Bus\Commands\Subscriber\UnsubscribeSubscriberCommand;
use App\Bus\Handlers\Commands\Subscriber\UnsubscribeSubscriberCommandHandler;
use App\Models\Subscriber;
use Tests\AbstractTestCase;

/**
 * This is the unsubscribe subscriber command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class UnsubscribeSubscriberCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['subscriber' => new Subscriber()];
        $object = new UnsubscribeSubscriberCommand($params['subscriber']);

        return compact('params', 'object');
    }

    protected function getHandlerClass()
    {
        return UnsubscribeSubscriberCommandHandler::class;
    }
}
