<?php
require_once 'base/Page.php';
require_once 'base/CommandPage.php';

require_once 'Welcome.php';
require_once 'Download.php';

$STEPS = [
    0 => \pages\Welcome::class,
    1 => \pages\Download::class
];