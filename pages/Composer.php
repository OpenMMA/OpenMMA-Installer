<?php
namespace pages;

use pages\base\CommandPage;

class Composer extends CommandPage
{
    public static function label(): string { return 'COMPOSER'; }
    public static function title(): string { return 'Run Composer'; }
    public static function submit_label(): string { return 'Continue'; }
    public static function command(): string { return 'composer install -d tmp/'; }
    public static function required_fields(): array { return []; }
}