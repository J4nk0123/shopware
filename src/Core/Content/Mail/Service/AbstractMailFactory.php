<?php declare(strict_types=1);

namespace Shopware\Core\Content\Mail\Service;

use Shopware\Core\Framework\Log\Package;
use Symfony\Component\Mime\Email;

#[Package('system-settings')]
abstract class AbstractMailFactory
{
    /**
     * @param array<int|string, string> $sender e.g. ['shopware@example.com' => 'Shopware AG']
     * @param array<string, string> $recipients e.g. ['shopware@example.com' => 'Shopware AG', 'symfony@example.com' => 'Symfony']
     * @param array<string, string> $contents e.g. ['text/plain' => 'Foo', 'text/html' => '&lt;h1&gt;Bar&lt;/h1&gt;']
     * @param array<string, string> $additionalData e.g. [
     *                              'recipientsCc' => 'shopware &lt;shopware@example.com&gt;,
     *                              'recipientsBcc' => 'shopware@example.com',
     *                              'replyTo' => 'reply@example.com',
     *                              'returnPath' => 'bounce@example.com'
     *                              ]
     * @param array<array<string, string>>|null $binAttachments
     * @param array<int, string> $attachments
     */
    abstract public function create(
        string $subject,
        array $sender,
        array $recipients,
        array $contents,
        array $attachments,
        array $additionalData,
        ?array $binAttachments = null
    ): Email;

    abstract public function getDecorated(): AbstractMailFactory;
}
