<?php

namespace Drivezy\LaravelAdmin\Database\Seeds;

use Drivezy\LaravelAdmin\Models\ModuleMenu;

class ModuleMenuSeeder {

    public function run () {
        $records = [
            [
                'module_id'     => 1,
                'menu_id'       => 1,
                'display_order' => 1,
            ],
            [
                'module_id'     => 1,
                'menu_id'       => 2,
                'display_order' => 1,
            ],
            [
                'module_id'     => 1,
                'menu_id'       => 3,
                'display_order' => 1,
            ],
        ];

        foreach ( $records as $record )
            ModuleMenu::create($record);
    }
}