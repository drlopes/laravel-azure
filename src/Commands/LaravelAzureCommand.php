<?php

namespace DRLopes\LaravelAzure\Commands;

use Illuminate\Console\Command;

class LaravelAzureCommand extends Command
{
    public $signature = 'laravel-azure';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
