<?php
namespace pages\base;

abstract class CommandPage extends Page
{
    public static abstract function command(): string;

    private function flush()
    {
        echo '<span class="d-none">';
        echo str_pad('',4096-28)."\n";
        echo '</span>';
        ob_flush();
        flush();
    }

    public function render()
    {
?>
<div class="text-center py-4">
    <i id="spinner" class="fa-solid fa-circle-notch fa-spin fs-2 mb-3"></i>
    <p id="complete" class="fs-4 d-none">Done!</p>
</div>
<div class="accordion mb-2" id="progress-accordion">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#progress">
            View details...
            </button>
        </h2>
        <div id="progress" class="accordion-collapse collapse bg-dark text-light" data-bs-parent="#progress-accordion">
            <div class="accordion-body overflow-auto" style="max-height: 50vh;">
                <pre class="m-1 p-2">
<?php
        $process = proc_open($this->command(),
                             [["pipe", "r"], ["pipe", "w"], ["pipe", "w"]],
                             $pipes,
                             realpath('./'),
                             array()
                            );
        $this->flush();
        if (is_resource($process)) {
            while ($s = fgets($pipes[1])) {
                print $s;
                $this->flush();
            }
        }
?>
                </pre>
            </div>
        </div>
    </div>
</div>
<script>
    $("#spinner").addClass('d-none');
    $("#complete").removeClass('d-none');
</script>
<?php
    }
}