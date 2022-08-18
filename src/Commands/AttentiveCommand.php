<?php

namespace Astrogoat\Attentive\Commands;

use Illuminate\Console\Command;

class AttentiveCommand extends Command
{
    public $signature = 'attentive';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
