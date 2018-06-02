<?php

namespace Drivezy\LaravelAdmin\Models;

use Drivezy\LaravelAdmin\Observers\ModuleObserver;
use Drivezy\LaravelUtility\Models\BaseModel;

/**
 * Class Module
 * @package Drivezy\LaravelAdmin\Models
 */
class Module extends BaseModel {
    /**
     * @var string
     */
    protected $table = 'dz_module_details';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menus () {
        return $this->hasMany(Menu::class);
    }

    /**
     * Load the observer rule against the model
     */
    public static function boot () {
        parent::boot();
        self::observe(new ModuleObserver());
    }
}