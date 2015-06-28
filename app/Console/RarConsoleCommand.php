<?php

namespace App\Console;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class RarConsoleCommand extends SlayerCommand
{
    protected $name = 'my:command';

    protected $description = 'My Description';

    /**
     * Add your code below
     */
    public function fire()
    {
        // your code here ...
    }

    /**
     * Arguments... 
     *
     * @return mixed
     */
    protected function arguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'Your first argument.'],
        ];
    }

    /**
     * Options...
     * 
     * @return mixed
     */
    protected function options()
    {
        return [
            ['option', null, InputOption::VALUE_NONE, 'Your first option.'],
        ];
    }
}