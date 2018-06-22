<?php

namespace Drivezy\LaravelAdmin\Database\Seeds;

use Drivezy\LaravelAdmin\Models\Module;

/**
 * Class ModuleSeeder
 * @package Drivezy\LaravelAdmin\Database\Seeds
 */
class ModuleSeeder {
    /**
     *
     */
    public function run () {
        Module::create([
            'id'            => 1,
            'name'          => 'Developer',
            'description'   => 'Menus related to developer',
            'display_order' => 10,
        ]);
    }
}