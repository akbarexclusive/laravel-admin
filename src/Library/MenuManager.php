<?php

namespace Drivezy\LaravelAdmin\Library;

use Drivezy\LaravelAdmin\Models\Menu;
use Drivezy\LaravelRecordManager\Library\PreferenceManager;
use Illuminate\Support\Facades\Response;

/**
 * Class MenuManager
 * @package Drivezy\LaravelAdmin\Library
 */
class MenuManager {

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public static function getMenuDetails ($id) {
        $menu = Menu::find($id);

        $menu->layouts = PreferenceManager::getListPreference(Menu::class, $id);

        return Response::json(['success' => true, 'response' => $menu]);
    }

    public static function getMenus () {

    }
}