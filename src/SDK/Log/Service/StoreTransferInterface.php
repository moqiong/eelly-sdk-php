<?php

declare(strict_types=1);

/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eelly\SDK\Log\Service;

use Eelly\DTO\StoreTransferDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface StoreTransferInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getStoreTransfer(int $StoreTransferId): StoreTransferDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addStoreTransfer(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateStoreTransfer(int $StoreTransferId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteStoreTransfer(int $StoreTransferId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listStoreTransferPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
