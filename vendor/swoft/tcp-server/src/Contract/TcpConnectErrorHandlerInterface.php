<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace Swoft\Tcp\Server\Contract;

use Swoft\Error\Contract\ErrorHandlerInterface;
use Throwable;

/**
 * Class TcpConnectErrorHandlerInterface
 *
 * @since 2.0.3
 */
interface TcpConnectErrorHandlerInterface extends ErrorHandlerInterface
{
    /**
     * @param Throwable $e
     * @param int       $fd
     */
    public function handle(Throwable $e, int $fd): void;
}
