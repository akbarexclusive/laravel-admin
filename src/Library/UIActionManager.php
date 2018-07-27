<?php

namespace Drivezy\LaravelAdmin\Library;

use Drivezy\LaravelAdmin\Models\UIAction;

/**
 * Class UIActionManager
 * @package Drivezy\LaravelAdmin\Library
 */
class UIActionManager {
    /**
     * @param $source
     * @param $id
     * @return \Illuminate\Support\Collection
     */
    public static function getObjectUIActions ($source, $id) {
        return UIAction::with(['execution_script', 'filter_condition'])->where('source_type', $source)->where('source_id', $id)->get();
    }
}