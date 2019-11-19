<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Events\User;

use App\Bus\Events\User\UserPassedTwoAuthEvent;
use App\Models\User;

/**
 * This is the user passed two auth event test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UserPassedTwoAuthEventTest extends AbstractUserEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['user' => new User()];
        $object = new UserPassedTwoAuthEvent($params['user']);

        return compact('params', 'object');
    }
}
