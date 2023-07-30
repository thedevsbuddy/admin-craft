<?php

namespace Devsbuddy\AdminCraft\Commands;

use Illuminate\Console\Command;

class AdminCraftCommand extends Command
{
    public $signature = 'admin-craft';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
