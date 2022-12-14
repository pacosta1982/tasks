<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'task' => [
        'title' => 'Tasks',

        'actions' => [
            'index' => 'Tasks',
            'create' => 'New Task',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'start_date' => 'Start date',
            'end_date' => 'End date',
            'enabled' => 'Enabled',
            
        ],
    ],

    'status' => [
        'title' => 'Statuses',

        'actions' => [
            'index' => 'Statuses',
            'create' => 'New Status',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'color' => 'Color',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];