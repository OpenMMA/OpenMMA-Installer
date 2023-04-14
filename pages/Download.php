<?php
namespace pages;

use pages\base\CommandPage;

class Download extends CommandPage
{
    public static function label(): string { return 'DOWNLOAD'; }
    public static function title(): string { return 'Downloading OpenMMA'; }
    public static function submit_label(): string { return 'Continue'; }
    public static function command(): string { return 'git clone https://github.com/OpenMMA/OpenMMA.git --progress tmp/'; }
    public static function required_fields(): array { return []; }
}