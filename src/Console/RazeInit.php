<?php

namespace Ribedo\Raze\Console;

use Illuminate\Console\Command;

class RazeInit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'raze:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create raze.json';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filePath = getcwd() . '/raze.json';
        $jsonData = json_encode(['includes' => ["resources/views/**", "resources/css/**"]], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

        file_put_contents($filePath, $jsonData);

        $this->info('raze.json created successfully.');
    }
}
