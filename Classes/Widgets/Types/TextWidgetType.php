<?php
declare(strict_types = 1);

namespace Haassie\Dashboard\Widgets\Types;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

class TextWidgetType extends AbstractWidgetType
{
    public function renderHTML(array $settings = []): string
    {
        $templateView = GeneralUtility::makeInstance(StandaloneView::class);
        $templateView->setTemplatePathAndFilename(
            GeneralUtility::getFileAbsFileName('EXT:dashboard/Resources/Private/Templates/Widgets/TextWidget.html')
        );

        $templateView->assign('settings', $settings);
        $templateView->assign('config', $this->config);

        return $templateView->render();
    }
}
