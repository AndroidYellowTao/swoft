<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace Swoft\WebSocket\Server\Exception\Handler;

use Swoft\Error\ErrorType;
use Swoft\WebSocket\Server\Contract\HandshakeErrorHandlerInterface;

/**
 * Class AbstractHandshakeErrorHandler
 *
 * @since 2.0
 */
abstract class AbstractHandshakeErrorHandler implements HandshakeErrorHandlerInterface
{
    /**
     * @return int
     */
    public function getType(): int
    {
        return ErrorType::WS_HS;
    }
}
