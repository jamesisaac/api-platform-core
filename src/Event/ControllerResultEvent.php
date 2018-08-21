<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\Event;

use Symfony\Component\HttpFoundation\Request;

class ControllerResultEvent
{
  private $request;
  private $controllerResult;

  public function __construct(Request $request, $controllerResult)
  {
    $this->request = $request;
    $this->controllerResult = $controllerResult;
  }

  public function getRequest(): Request
  {
    return $this->request;
  }

  public function getControllerResult()
  {
    return $this->controllerResult;
  }
}
