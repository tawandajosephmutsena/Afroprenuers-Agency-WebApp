<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use BezhanSalleh\FilamentShield\Support\Utils;
use Spatie\Permission\PermissionRegistrar;

class ShieldSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $rolesWithPermissions = '[{"name":"panel_user","guard_name":"web","permissions":["view_article","create_article","update_article","view_category","view_any_category","create_category","view_client","create_client","view_invoice","create_invoice","view_lead","view_any_lead","create_lead","update_lead","view_media","view_any_media","create_media","view_note","create_note","update_note","delete_note","view_portfolio","view_project","create_project","update_project","delete_project","view_service","view_tag","create_tag","update_tag","view_task","view_any_task","create_task","update_task","delete_task","page_EditProfilePage","view_gantt_chart","update_gantt_chart","manage_gantt_chart"]},{"name":"super_admin","guard_name":"web","permissions":["view_article","view_any_article","create_article","update_article","restore_article","restore_any_article","replicate_article","reorder_article","delete_article","delete_any_article","force_delete_article","force_delete_any_article","view_category","view_any_category","create_category","update_category","restore_category","restore_any_category","replicate_category","reorder_category","delete_category","delete_any_category","force_delete_category","force_delete_any_category","view_client","view_any_client","create_client","update_client","restore_client","restore_any_client","replicate_client","reorder_client","delete_client","delete_any_client","force_delete_client","force_delete_any_client","view_invoice","view_any_invoice","create_invoice","update_invoice","restore_invoice","restore_any_invoice","replicate_invoice","reorder_invoice","delete_invoice","delete_any_invoice","force_delete_invoice","force_delete_any_invoice","view_lead","view_any_lead","create_lead","update_lead","restore_lead","restore_any_lead","replicate_lead","reorder_lead","delete_lead","delete_any_lead","force_delete_lead","force_delete_any_lead","view_media","view_any_media","create_media","update_media","restore_media","restore_any_media","replicate_media","reorder_media","delete_media","delete_any_media","force_delete_media","force_delete_any_media","view_note","view_any_note","create_note","update_note","restore_note","restore_any_note","replicate_note","reorder_note","delete_note","delete_any_note","force_delete_note","force_delete_any_note","view_page","view_any_page","create_page","update_page","restore_page","restore_any_page","replicate_page","reorder_page","delete_page","delete_any_page","force_delete_page","force_delete_any_page","view_portfolio","view_any_portfolio","create_portfolio","update_portfolio","restore_portfolio","restore_any_portfolio","replicate_portfolio","reorder_portfolio","delete_portfolio","delete_any_portfolio","force_delete_portfolio","force_delete_any_portfolio","view_project","view_any_project","create_project","update_project","restore_project","restore_any_project","replicate_project","reorder_project","delete_project","delete_any_project","force_delete_project","force_delete_any_project","view_role","view_any_role","create_role","update_role","delete_role","delete_any_role","view_service","view_any_service","create_service","update_service","restore_service","restore_any_service","replicate_service","reorder_service","delete_service","delete_any_service","force_delete_service","force_delete_any_service","view_tag","view_any_tag","create_tag","update_tag","restore_tag","restore_any_tag","replicate_tag","reorder_tag","delete_tag","delete_any_tag","force_delete_tag","force_delete_any_tag","view_task","view_any_task","create_task","update_task","restore_task","restore_any_task","replicate_task","reorder_task","delete_task","delete_any_task","force_delete_task","force_delete_any_task","view_user","view_any_user","create_user","update_user","restore_user","restore_any_user","replicate_user","reorder_user","delete_user","delete_any_user","force_delete_user","force_delete_any_user","page_AccessibilitySettings","page_KanbanBoard","page_GeneralSettingsPage","page_InvoiceStatus","page_Themes","page_Backups","page_HealthCheckResults","page_EditProfilePage","widget_TaskFocusMode","widget_KanbanStats","widget_ProjectStats","widget_ArticlesChart","widget_LatestTasks","widget_LatestLeads","view_gantt_chart","update_gantt_chart","manage_gantt_chart"]}]';
        $directPermissions = '[]';

        static::makeRolesWithPermissions($rolesWithPermissions);
        static::makeDirectPermissions($directPermissions);

        $this->command->info('Shield Seeding Completed.');
    }

    protected static function makeRolesWithPermissions(string $rolesWithPermissions): void
    {
        if (! blank($rolePlusPermissions = json_decode($rolesWithPermissions, true))) {
            /** @var Model $roleModel */
            $roleModel = Utils::getRoleModel();
            /** @var Model $permissionModel */
            $permissionModel = Utils::getPermissionModel();

            foreach ($rolePlusPermissions as $rolePlusPermission) {
                $role = $roleModel::firstOrCreate([
                    'name' => $rolePlusPermission['name'],
                    'guard_name' => $rolePlusPermission['guard_name'],
                ]);

                if (! blank($rolePlusPermission['permissions'])) {
                    $permissionModels = collect($rolePlusPermission['permissions'])
                        ->map(fn ($permission) => $permissionModel::firstOrCreate([
                            'name' => $permission,
                            'guard_name' => $rolePlusPermission['guard_name'],
                        ]))
                        ->all();

                    $role->syncPermissions($permissionModels);
                }
            }
        }
    }

    public static function makeDirectPermissions(string $directPermissions): void
    {
        if (! blank($permissions = json_decode($directPermissions, true))) {
            /** @var Model $permissionModel */
            $permissionModel = Utils::getPermissionModel();

            foreach ($permissions as $permission) {
                if ($permissionModel::whereName($permission)->doesntExist()) {
                    $permissionModel::create([
                        'name' => $permission['name'],
                        'guard_name' => $permission['guard_name'],
                    ]);
                }
            }
        }
    }
}
