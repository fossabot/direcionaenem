<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class NewBlankPage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:blank';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a boilerplate blank page.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        echo file_get_contents(app_path('Console/templates/blank.stub'));
    }
}
