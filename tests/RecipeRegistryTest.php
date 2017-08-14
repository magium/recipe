<?php

namespace Magium\Recipe\Tests;

use Magium\Recipe\Repository\DuplicateRecipeNameException;
use Magium\Recipe\Repository\InvalidRecipeNameException;
use Magium\Recipe\Repository\RecipeRegistry;
use PHPUnit\Framework\TestCase;

class RecipeRegistryTest extends TestCase
{

    public function testDuplicateRecipeNameThrowsException()
    {
        $this->expectException(DuplicateRecipeNameException::class);
        $repo = new RecipeRegistry();
        $repo->clear();
        $recipe = new GenericTestRecipe('test/test');
        $repo->addRecipe($recipe);
        $repo->addRecipe($recipe);
    }

    public function testInvalidNameThrowsException()
    {
        $this->expectException(InvalidRecipeNameException::class);
        $repo = new RecipeRegistry();
        $repo->clear();
        $recipe = new GenericTestRecipe('test');
        $repo->addRecipe($recipe);
    }

    public function testInvalidNameWithExclamationThrowsException()
    {
        $this->expectException(InvalidRecipeNameException::class);
        $repo = new RecipeRegistry();
        $repo->clear();
        $recipe = new GenericTestRecipe('test!/test');
        $repo->addRecipe($recipe);
    }

    public function testValidRecipeAdded()
    {
        $repo = new RecipeRegistry();
        $repo->clear();
        $recipe = new GenericTestRecipe('test/test');
        $repo->addRecipe($recipe);
    }

}
