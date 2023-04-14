<?php
require_once 'base/Page.php';
require_once 'base/CommandPage.php';

require_once 'Welcome.php';
require_once 'Download.php';
require_once 'Composer.php';

$STEPS = [
    0 => \pages\Welcome::class,
    1 => \pages\Download::class,
    2 => \pages\Composer::class
];