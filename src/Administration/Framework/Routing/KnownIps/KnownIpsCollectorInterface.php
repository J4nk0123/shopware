<?php declare(strict_types=1);

namespace Shopware\Administration\Framework\Routing\KnownIps;

use Shopware\Core\Framework\Log\Package;
use Symfony\Component\HttpFoundation\Request;

#[Package('administration')]
interface KnownIpsCollectorInterface
{
    /**
     * @param Request $request
     *
     * @return array<string>
     */
    public function collectIps(Request $request): array;
}
