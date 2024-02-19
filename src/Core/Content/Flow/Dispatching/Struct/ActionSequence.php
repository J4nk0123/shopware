<?php declare(strict_types=1);

namespace Shopware\Core\Content\Flow\Dispatching\Struct;

use Shopware\Core\Framework\Log\Package;

/**
 * @internal not intended for decoration or replacement
 */
#[Package('services-settings')]
class ActionSequence extends Sequence
{
    public string $action;

    /**
     * @var array<string, mixed>
     */
    public array $config = [];

    public ?Sequence $nextAction = null;

    public ?string $appFlowActionId = null;
}
