<?php

namespace Magium\Recipe\Command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ListRecipes extends \Symfony\Component\Console\Command\Command
{

    protected function configure()
    {
        $this->setName('magium:recipe:list');
        $this->setDescription('List all registered recipes');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }

}
