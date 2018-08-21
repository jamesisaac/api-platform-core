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

namespace ApiPlatform\Core\GraphQl\Event;

use ApiPlatform\Core\Event\ControllerResultEventInterface;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Request;

class GraphQlControllerResultEvent extends Event implements ControllerResultEventInterface
{
  private $request;
  private $controllerResult;
  private $operationName;

  public function __construct(Request $request, $controllerResult, string $operationName)
  {
    $this->request = $request;
    $this->controllerResult = $controllerResult;
    $this->operationName = $operationName;
  }

  public function getRequest(): Request
  {
    return $this->request;
  }

  public function getControllerResult()
  {
    return $this->controllerResult;
  }

  public function getOperationName(): string
  {
    return $this->operationName;
  }
}
