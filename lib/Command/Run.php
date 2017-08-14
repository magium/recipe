<?php

namespace Magium\Recipe\Command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Run extends \Symfony\Component\Console\Command\Command
{

    protected function configure()
    {
        $this->setName('magium:recipe:run');
        $this->setDescription('Run a named recipe');
        $this->addArgument(
            'name',
            InputArgument::REQUIRED,
            'The name of the recipe'
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }

}
