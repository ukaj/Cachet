<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Commands\System\Config;

use AltThree\TestBench\CommandTrait;
use App\Bus\Commands\System\Config\UpdateConfigCommand;
use App\Bus\Handlers\Commands\System\Config\UpdateConfigCommandHandler;
use Tests\AbstractTestCase;

/**
 * This is the update config command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UpdateConfigCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'values' => [
                'FOO' => 'bar',
            ],
        ];
        $object = new UpdateConfigCommand($params['values']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return UpdateConfigCommandHandler::class;
    }
}
