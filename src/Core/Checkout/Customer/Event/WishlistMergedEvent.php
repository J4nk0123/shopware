<?php declare(strict_types=1);

namespace Shopware\Core\Checkout\Customer\Event;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\Event\ShopwareSalesChannelEvent;
use Shopware\Core\Framework\Log\Package;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Symfony\Contracts\EventDispatcher\Event;

#[Package('checkout')]
class WishlistMergedEvent extends Event implements ShopwareSalesChannelEvent
{
    /**
     * @var array<array<string, string>>
     */
    protected $products;

    /**
     * @var SalesChannelContext
     */
    protected $context;

    /**
     * @param array<array<string, string>> $product
     */
    public function __construct(
        array $product,
        SalesChannelContext $context
    ) {
        $this->products = $product;
        $this->context = $context;
    }

    /**
     * @return array<array<string, string>>
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    public function getContext(): Context
    {
        return $this->context->getContext();
    }

    public function getSalesChannelContext(): SalesChannelContext
    {
        return $this->context;
    }
}
