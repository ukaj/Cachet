<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Commands\ComponentGroup;

use AltThree\TestBench\CommandTrait;
use App\Bus\Commands\ComponentGroup\UpdateComponentGroupCommand;
use App\Bus\Handlers\Commands\ComponentGroup\UpdateComponentGroupCommandHandler;
use App\Models\ComponentGroup;
use Tests\AbstractTestCase;

/**
 * This is the update component group command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class UpdateComponentGroupCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'group'     => new ComponentGroup(),
            'name'      => 'Foo',
            'order'     => 1,
            'collapsed' => 2,
            'visible'   => ComponentGroup::VISIBLE_AUTHENTICATED,
        ];
        $object = new UpdateComponentGroupCommand(
            $params['group'],
            $params['name'],
            $params['order'],
            $params['collapsed'],
            $params['visible']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return UpdateComponentGroupCommandHandler::class;
    }
}
