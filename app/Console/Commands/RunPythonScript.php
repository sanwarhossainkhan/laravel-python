<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunPythonScript extends Command
{
    protected $signature = 'python:run {name}';
    protected $description = 'Run a Python script from Laravel';

    public function handle()
    {
        $name = $this->argument('name');

        $pythonExecutable = 'python'; // Use 'python3' if needed
        $scriptPath = base_path('python_script\my_script.py');

        $command = "{$pythonExecutable} {$scriptPath} {$name}";

        $output = shell_exec($command);

        $this->info($output);
    }
}
