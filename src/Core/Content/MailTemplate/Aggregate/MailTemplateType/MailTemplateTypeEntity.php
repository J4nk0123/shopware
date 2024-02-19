<?php declare(strict_types=1);

namespace Shopware\Core\Content\MailTemplate\Aggregate\MailTemplateType;

use Shopware\Core\Content\MailTemplate\Aggregate\MailTemplateTypeTranslation\MailTemplateTypeTranslationCollection;
use Shopware\Core\Content\MailTemplate\MailTemplateCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityCustomFieldsTrait;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use Shopware\Core\Framework\Log\Package;

#[Package('services-settings')]
class MailTemplateTypeEntity extends Entity
{
    use EntityCustomFieldsTrait;
    use EntityIdTrait;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $technicalName;

    /**
     * @var array<string>|null
     */
    protected $availableEntities;

    /**
     * @var MailTemplateTypeTranslationCollection|null
     */
    protected $translations;

    /**
     * @var MailTemplateCollection|null
     */
    protected $mailTemplates;

    /**
     * @var  array<string>|null $templateData
     */
    protected ?array $templateData;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getTechnicalName(): string
    {
        return $this->technicalName;
    }

    public function setTechnicalName(string $technicalName): void
    {
        $this->technicalName = $technicalName;
    }

    public function getTranslations(): ?MailTemplateTypeTranslationCollection
    {
        return $this->translations;
    }

    /**
     * @return array<string>|null
     */
    public function getAvailableEntities(): ?array
    {
        return $this->availableEntities;
    }

    /**
     * @param array<string>|null $availableEntities
     */
    public function setAvailableEntities(?array $availableEntities): void
    {
        $this->availableEntities = $availableEntities;
    }

    public function setTranslations(MailTemplateTypeTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getMailTemplates(): ?MailTemplateCollection
    {
        return $this->mailTemplates;
    }

    public function setMailTemplates(MailTemplateCollection $mailTemplates): void
    {
        $this->mailTemplates = $mailTemplates;
    }

    /**
     * @return array<string>|null
     */
    public function getTemplateData(): ?array
    {
        return $this->templateData;
    }

    /**
     * @param array<string>|null $templateData
     */
    public function setTemplateData(?array $templateData): void
    {
        $this->templateData = $templateData;
    }
}
