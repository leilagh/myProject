<?php

namespace App\AppClasses;


use App\Models\Role;
use Auth;
use Exception;

class RoleHandler
{

    public static function userRoles($user = null)
    {
        try {
            $user = $user != null ? $user : Auth::user();
            $roles = [];
            foreach (json_decode($user->role_id) as $role) {
                $roles = array_merge($roles, json_decode(Role::find($role)->roles, true));
            }
            return $roles;
        } catch (Exception $e) {
            return [];
        }
    }

}