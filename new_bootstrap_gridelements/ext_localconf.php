<?php

defined('TYPO3_MODE') || die();

(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT:source="FILE:EXT:new_bootstrap_gridelements/Configuration/PageTS/PageTS.typoscript">');
})();
