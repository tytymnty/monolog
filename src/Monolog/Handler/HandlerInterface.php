<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler;

interface HandlerInterface
{
    public function handle($message);

    public function setLevel($level);

    public function getLevel();

    public function setBubble($bubble);

    public function getBubble();

    public function getParent();

    public function setParent(HandlerInterface $parent);
}