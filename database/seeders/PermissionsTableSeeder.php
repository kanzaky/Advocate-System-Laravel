<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 18,
                'title' => 'currency_create',
            ],
            [
                'id'    => 19,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 20,
                'title' => 'currency_show',
            ],
            [
                'id'    => 21,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 22,
                'title' => 'currency_access',
            ],
            [
                'id'    => 23,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 24,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 25,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 26,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 27,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 28,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 29,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 30,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 31,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 32,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 33,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 34,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 35,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 36,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 37,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 38,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 39,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 40,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 41,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 42,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 43,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 44,
                'title' => 'client_create',
            ],
            [
                'id'    => 45,
                'title' => 'client_edit',
            ],
            [
                'id'    => 46,
                'title' => 'client_show',
            ],
            [
                'id'    => 47,
                'title' => 'client_delete',
            ],
            [
                'id'    => 48,
                'title' => 'client_access',
            ],
            [
                'id'    => 49,
                'title' => 'project_create',
            ],
            [
                'id'    => 50,
                'title' => 'project_edit',
            ],
            [
                'id'    => 51,
                'title' => 'project_show',
            ],
            [
                'id'    => 52,
                'title' => 'project_delete',
            ],
            [
                'id'    => 53,
                'title' => 'project_access',
            ],
            [
                'id'    => 54,
                'title' => 'note_create',
            ],
            [
                'id'    => 55,
                'title' => 'note_edit',
            ],
            [
                'id'    => 56,
                'title' => 'note_show',
            ],
            [
                'id'    => 57,
                'title' => 'note_delete',
            ],
            [
                'id'    => 58,
                'title' => 'note_access',
            ],
            [
                'id'    => 59,
                'title' => 'document_create',
            ],
            [
                'id'    => 60,
                'title' => 'document_edit',
            ],
            [
                'id'    => 61,
                'title' => 'document_show',
            ],
            [
                'id'    => 62,
                'title' => 'document_delete',
            ],
            [
                'id'    => 63,
                'title' => 'document_access',
            ],
            [
                'id'    => 64,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 65,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 66,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 67,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 68,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 69,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 70,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 71,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 72,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 73,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 74,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 75,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 76,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 77,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 78,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 79,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 80,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 81,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 82,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 83,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 84,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 85,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 86,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 87,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 88,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 89,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 90,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 91,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 92,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 93,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 94,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 95,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 96,
                'title' => 'task_create',
            ],
            [
                'id'    => 97,
                'title' => 'task_edit',
            ],
            [
                'id'    => 98,
                'title' => 'task_show',
            ],
            [
                'id'    => 99,
                'title' => 'task_delete',
            ],
            [
                'id'    => 100,
                'title' => 'task_access',
            ],
            [
                'id'    => 101,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 102,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
