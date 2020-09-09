<?php

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
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 24,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 25,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 26,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 27,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 28,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 29,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 30,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 31,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 32,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 33,
                'title' => 'asset_create',
            ],
            [
                'id'    => 34,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 35,
                'title' => 'asset_show',
            ],
            [
                'id'    => 36,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 37,
                'title' => 'asset_access',
            ],
            [
                'id'    => 38,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 39,
                'title' => 'course_create',
            ],
            [
                'id'    => 40,
                'title' => 'course_edit',
            ],
            [
                'id'    => 41,
                'title' => 'course_show',
            ],
            [
                'id'    => 42,
                'title' => 'course_delete',
            ],
            [
                'id'    => 43,
                'title' => 'course_access',
            ],
            [
                'id'    => 44,
                'title' => 'lesson_create',
            ],
            [
                'id'    => 45,
                'title' => 'lesson_edit',
            ],
            [
                'id'    => 46,
                'title' => 'lesson_show',
            ],
            [
                'id'    => 47,
                'title' => 'lesson_delete',
            ],
            [
                'id'    => 48,
                'title' => 'lesson_access',
            ],
            [
                'id'    => 49,
                'title' => 'test_create',
            ],
            [
                'id'    => 50,
                'title' => 'test_edit',
            ],
            [
                'id'    => 51,
                'title' => 'test_show',
            ],
            [
                'id'    => 52,
                'title' => 'test_delete',
            ],
            [
                'id'    => 53,
                'title' => 'test_access',
            ],
            [
                'id'    => 54,
                'title' => 'question_create',
            ],
            [
                'id'    => 55,
                'title' => 'question_edit',
            ],
            [
                'id'    => 56,
                'title' => 'question_show',
            ],
            [
                'id'    => 57,
                'title' => 'question_delete',
            ],
            [
                'id'    => 58,
                'title' => 'question_access',
            ],
            [
                'id'    => 59,
                'title' => 'question_option_create',
            ],
            [
                'id'    => 60,
                'title' => 'question_option_edit',
            ],
            [
                'id'    => 61,
                'title' => 'question_option_show',
            ],
            [
                'id'    => 62,
                'title' => 'question_option_delete',
            ],
            [
                'id'    => 63,
                'title' => 'question_option_access',
            ],
            [
                'id'    => 64,
                'title' => 'test_result_create',
            ],
            [
                'id'    => 65,
                'title' => 'test_result_edit',
            ],
            [
                'id'    => 66,
                'title' => 'test_result_show',
            ],
            [
                'id'    => 67,
                'title' => 'test_result_delete',
            ],
            [
                'id'    => 68,
                'title' => 'test_result_access',
            ],
            [
                'id'    => 69,
                'title' => 'test_answer_create',
            ],
            [
                'id'    => 70,
                'title' => 'test_answer_edit',
            ],
            [
                'id'    => 71,
                'title' => 'test_answer_show',
            ],
            [
                'id'    => 72,
                'title' => 'test_answer_delete',
            ],
            [
                'id'    => 73,
                'title' => 'test_answer_access',
            ],
            [
                'id'    => 74,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
