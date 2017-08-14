<?php

namespace Magium\Recipe\Tests;

use Magium\Recipe\Recipe\RecipeInterface;

class GenericTestRecipe implements RecipeInterface
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function execute()
    {

    }

}
