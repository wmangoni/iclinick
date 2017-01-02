<?php

namespace App\Providers;

use App\Actions_group;
use App\Actions_user;
use App\Module;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();

        $gate->define('permission-to-show', function($user, $module_id) {
            return $this->retrieveUserPermission('show', $user, $module_id);
        });

        $gate->define('permission-to-insert', function($user, $module_id) {
            return $this->retrieveUserPermission('insert', $user, $module_id);
        });

        $gate->define('permission-to-update', function($user, $module_id) {
            return $this->retrieveUserPermission('update', $user, $module_id);
        });

        $gate->define('permission-to-delete', function($user, $module_id) {
            return $this->retrieveUserPermission('delete', $user, $module_id);
        });

    }

    private function retrieveUserPermission($action, $user, $module_id)
    {
        $permission = Actions_user::where('user_id', $user->id)->where('module_id', $module_id)->get()->toArray();
        $permission = end($permission);

        if ($permission) {


            if ($permission[$action] == 1)
                return TRUE;

            return FALSE;

        } else {
            return $this->retrieveGroupPermission($action, $user, $module_id);
        }
    }

    private function retrieveGroupPermission($action, $user, $module_id)
    {
        $permission = Actions_group::where('group_id', $user->group_id)->where('module_id', $module_id)->get()->toArray();
        $permission = end($permission);

        if ($permission) {

            if ($permission[$action] == 1)
                return TRUE;

            return FALSE;
        }

        return FALSE;
    }
}