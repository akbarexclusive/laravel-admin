<?php

namespace Drivezy\LaravelAdmin\Models;

use Drivezy\LaravelAdmin\Observers\MenuObserver;
use Drivezy\LaravelUtility\Models\BaseModel;

/**
 * Class Menu
 * @package Drivezy\LaravelAdmin\Models
 */
class Menu extends BaseModel {
    /**
     * @var string
     */
    protected $table = 'dz_menu_details';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modules () {
        return $this->hasMany(ModuleMenu::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parent_menus () {
        return $this->hasMany(ParentMenu::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function child_menus () {
        return $this->hasMany(ParentMenu::class, 'parent_menu_id');
    }

    /**
     * Load the observer rule against the model
     */
    public static function boot () {
        parent::boot();
        self::observe(new MenuObserver());
    }
}