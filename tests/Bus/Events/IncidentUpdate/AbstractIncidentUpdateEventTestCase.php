<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Events\IncidentUpdate;

use AltThree\TestBench\EventTrait;
use App\Bus\Events\IncidentUpdate\IncidentUpdateEventInterface;
use Tests\AbstractTestCase;

abstract class AbstractIncidentUpdateEventTestCase extends AbstractTestCase
{
    use EventTrait;

    protected function getEventInterfaces()
    {
        return [IncidentUpdateEventInterface::class];
    }
}
