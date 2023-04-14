<?php
namespace pages\base;

abstract class Page
{
    public static abstract function label(): string;
    public static abstract function title(): string;
    public static function submit_label(): string { return 'Submit'; }
    public static function required_fields(): array { return []; }

    public abstract function render();
    public function complete(array $data): bool
    {
        return true;
    }

    public function submit(): bool
    {
        if (!isset($_POST))
            return false;

        // TODO verify data
        $this->complete($_POST);

        $_SESSION['step']++;
        return true;
    }
}