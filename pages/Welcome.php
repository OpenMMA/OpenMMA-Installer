<?php
namespace pages;

use pages\base\Page;

class Welcome extends Page
{
    public static function label(): string { return 'WELCOME'; }
    public static function title(): string { return 'OpenMMA installation wizard'; }
    public static function submit_label(): string { return '<i class="fas fa-download"></i> Download'; }
    public static function required_fields(): array { return []; }

    public function render()
    {
        ?>
        <p>
            Welcome to the OpenMMA installation wizard!
            <br>
            Please click the button below to start downloading.
        </p>
        <?php
    }
}