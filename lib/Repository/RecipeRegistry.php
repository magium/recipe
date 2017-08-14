<?php

namespace Magium\Recipe\Repository;

use Magium\Recipe\Recipe\RecipeInterface;

class RecipeRegistry
{

    private static $recipes = [];

    public function addRecipe($name, $className)
    {
        if (isset(self::$recipes[$name])) {
            throw new DuplicateRecipeNameException(sprintf('The recipe with ID %s has already been added', $name));
        }
        $test = explode('/', $name);
        if (count($test) === 1) {
            throw new InvalidRecipeNameException('The recipe name should have at least one forward slash to denote a namespace, such as `company/recipe`');
        }
        if (preg_match('/[^\w\/]/', $name)) {
            throw new InvalidRecipeNameException('The recipe name can only contain word characters and the forward slash (as a namespace separator)');
        }
        self::$recipes[$name] = $className;
    }

    public function clear()
    {
        self::$recipes = [];
    }

}
