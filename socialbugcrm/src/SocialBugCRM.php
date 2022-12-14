<?php
/**
 * @author Socialbug Team <support@mlm-socialbug.com>
 * @copyright 2020 Km Innovations Inc DBA SocialBug
 * @license https://www.gnu.org/licenses/gpl-2.0.html
 */

namespace MyCompany\socialbugcrm;

class SocialBugCRMService
{
    /** @var TranslatorInterface */
    private $translator;

    /** @var string */
    private $customMessage;

    /**
     * @param string $customMessage
     */
    public function __construct(
        // TranslatorInterface $translator,
        $customMessage
    ) {
        // $this->translator = $translator;
        $this->customMessage = $customMessage;
    }

    /**
     * @return string
     */
    public function getTranslatedCustomMessage()
    {
        // return $this->translator->trans($this->customMessage, [], 'Modules.socialbugcrm');
        return $this->customMessage;
    }
}
