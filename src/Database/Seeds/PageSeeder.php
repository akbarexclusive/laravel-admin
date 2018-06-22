<?php

namespace Drivezy\LaravelAdmin\Database\Seeds;

use Drivezy\LaravelAdmin\Models\PageDefinition;

class PageSeeder {
    /**
     *
     */
    public function run () {
        $records = [
            [
                'id'          => 1,
                'name'        => 'generic-list',
                'description' => 'Generic listing page',
                'path'        => '/Generic-Listing/genericListing.scene',
            ],
            [
                'id'          => 2,
                'name'        => 'generic-detail',
                'description' => 'Generic detail page',
                'path'        => '/Generic-Detail/genericDetail.scene',
            ],
        ];
        foreach ( $records as $record )
            PageDefinition::create($record);
    }
}