<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Questions\Question4\Model\Resolver\Page;

use Magento\Framework\GraphQl\Query\Resolver\IdentityInterface;

/**
 * Identity for resolved Blog page
 */
class Identity implements IdentityInterface
{
    /** @var string */
    private $cacheTag = 'mytag';

    /**
     * Get page ID from resolved data
     *
     * @param array $resolvedData
     * @return string[]
     */
    public function getIdentities(array $resolvedData): array
    {
        return empty($resolvedData) ?
            [] : [$this->cacheTag, sprintf('%s_%s', $this->cacheTag, $resolvedData)];
    }
}
