<?php

namespace App\Providers;

use App\Models\Admin\Groups;
use App\Models\Admin\Roles;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $all_roles = Roles::all()->pluck('name', 'id')->toArray();
        foreach ($all_roles as $role) {
            Gate::define($role, function ($user, $role = '') {
                $user_roles = Groups::with('role')->join('employees', 'groups.id', 'employees.group_id')->where('groups.id', $user->group_id)->first()->role->pluck('name', 'id')->toArray();

                if (in_array($role, $user_roles)) {
                    return true;
                }
                return false;
            });
        }
    }
}
