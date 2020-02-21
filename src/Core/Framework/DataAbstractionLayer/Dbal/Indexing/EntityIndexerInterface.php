<?php declare(strict_types=1);

namespace Shopware\Core\Framework\DataAbstractionLayer\Dbal\Indexing;

use Shopware\Core\Framework\DataAbstractionLayer\Event\EntityWrittenContainerEvent;

interface EntityIndexerInterface
{
    /**
     * Returns a unique name for this indexer. This function is used for core updates
     * if a indexer has to run after an update.
     */
    public function getName(): string;

    /**
     * Called when a full entity index is required. This function should generate a list of message for all records which
     * are indexed by this indexer.
     */
    public function iterate($offset): ?EntityIndexingMessage;

    /**
     * Called when entities are updated over the DAL. This function should react to the provided entity written events
     * and generate a list of messages which has to be processed by the `handle` function over the message queue workers.
     */
    public function update(EntityWrittenContainerEvent $event): ?EntityIndexingMessage;

    /**
     * Called over the message queue workers. The messages are the generated messages
     * of the `self::iterate` or `self::update` functions.
     */
    public function handle(EntityIndexingMessage $message): void;
}
