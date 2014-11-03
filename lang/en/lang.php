<?php

return [
    'auth' => [
        'title' => 'Administration Area',
    ],
    'field' => [
        'invalid_type' => 'Invalid field type used :type.',
        'options_method_not_exists' => 'The model class :model must define a method :method() returning options for the ":field" form field.',
    ],
    'widget' => [
        'not_registered' => "A widget class name ':name' has not been registered",
        'not_bound' => "A widget with class name ':name' has not been bound to the controller",
    ],
    'page' => [
        'untitled' => "Untitled",
        'access_denied' => [
            'label' => "Access denied",
            'help' => "You don't have the required permissions to view this page.",
            'cms_link' => "Return to the back-end",
        ],
    ],
    'partial' => [
        'not_found' => "The partial ':name' is not found.",
    ],
    'account' => [
        'sign_out' => 'Sign out',
        'login' => 'Login',
        'reset' => 'Reset',
        'restore' => 'Restore',
        'login_placeholder' => 'login',
        'password_placeholder' => 'password',
        'forgot_password' => "Forgot your password?",
        'enter_email' => "Enter your email",
        'enter_login' => "Enter your login",
        'email_placeholder' => "email",
        'enter_new_password' => "Enter a new password",
        'password_reset' => "Password Reset",
        'restore_success' => "An email has been sent to your email address with password restore instructions.",
        'restore_error' => "A user could not be found with a login value of ':login'",
        'reset_success' => "Your password has been successfully reset. You may now sign in.",
        'reset_error' => "Invalid password reset data supplied. Please try again!",
        'reset_fail' => "Unable to reset your password!",
        'apply' => 'Apply',
        'cancel' => 'Cancel',
        'delete' => 'Delete',
        'ok' => 'OK',
    ],
    'dashboard' => [
        'menu_label' => 'Dashboard',
        'widget_label' => 'Widget',
        'widget_width' => 'Width',
        'full_width' => 'full width',
        'add_widget' => 'Add widget',
        'widget_inspector_title' => 'Widget configuration',
        'widget_inspector_description' => 'Configure the report widget',
        'widget_columns_label' => 'Width :columns',
        'widget_columns_description' => 'The widget width, a number between 1 and 10.',
        'widget_columns_error' => 'Please enter the widget width as a number between 1 and 10.',
        'columns' => '{1} column|[2,Inf] columns',
        'widget_new_row_label' => 'Force new row',
        'widget_new_row_description' => 'Put the widget in a new row.',
        'widget_title_label' => 'Widget title',
        'widget_title_error' => 'The Widget Title is required.',
        'status' => [
            'widget_title_default' => 'System status',
            'online' => 'online',
            'update_available' => '{0} updates available!|{1} update available!|[2,Inf] updates available!',
        ]
    ],
    'user' => [
        'name' => 'Administrator',
        'menu_label' => 'Administrators',
        'menu_description' => 'Manage back-end administrator users, groups and permissions.',
        'list_title' => 'Manage Administrators',
        'new' => 'New Administrator',
        'login' => "Login",
        'first_name' => "First Name",
        'last_name' => "Last Name",
        'full_name' => "Full Name",
        'email' => "Email",
        'groups' => "Groups",
        'groups_comment' => "Specify which groups this person belongs to.",
        'avatar' => "Avatar",
        'password' => "Password",
        'password_confirmation' => "Confirm Password",
        'superuser' => "Super User",
        'superuser_comment' => "Check this box to allow this person to access all areas.",
        'send_invite' => 'Send invitation by email',
        'send_invite_comment' => 'Use this checkbox to send an invitation to the user by email',
        'delete_confirm' => 'Do you really want to delete this administrator?',
        'return' => 'Return to the administrator list',
        'allow' => 'Allow',
        'inherit' => 'Inherit',
        'deny' => 'Deny',
        'group' => [
            'name' => 'Group',
            'name_field' => 'Name',
            'menu_label' => 'Groups',
            'list_title' => 'Manage Groups',
            'new' => 'New Administrator Group',
            'delete_confirm' => 'Do you really want to delete this administrator group?',
            'return' => 'Return to the group list',
        ],
        'preferences' => [
            'not_authenticated' => 'There is no an authenticated user to load or save preferences for.'
        ]
    ],
    'list' => [
        'default_title' => 'List',
        'search_prompt' => 'Search...',
        'no_records' => 'There are no records in this view.',
        'missing_model' => 'List behavior used in :class does not have a model defined.',
        'missing_column' => 'There are no column definitions for :columns.',
        'missing_columns' => 'List used in :class has no list columns defined.',
        'missing_definition' => "List behavior does not contain a column for ':field'.",
        'behavior_not_ready' => 'List behavior has not been initialized, check that you have called makeLists() in your controller.',
        'invalid_column_datetime' => "Column value ':column' is not a DateTime object, are you missing a \$dates reference in the Model?",
        'pagination' => 'Displayed records: :from-:to of :total',
        'prev_page' => 'Previous page',
        'next_page' => 'Next page',
        'loading' => 'Loading...',
        'setup_title' => 'List Setup',
        'setup_help' => 'Use checkboxes to select columns you want to see in the list. You can change position of columns by dragging them up or down.',
        'records_per_page' => 'Records per page',
        'records_per_page_help' => 'Select the number of records per page to display. Please note that high number of records on a single page can reduce performance.'
    ],
    'fileupload' => [
        'attachment' => 'Attachment',
        'help' => 'Add a title and description for this attachment.',
        'title_label' => 'Title',
        'description_label' => 'Description'
    ],
    'form' => [
        'create_title' => "New :name",
        'update_title' => "Edit :name",
        'preview_title' => "Preview :name",
        'create_success' => 'The :name has been created successfully',
        'update_success' => 'The :name has been updated successfully',
        'delete_success' => 'The :name has been deleted successfully',
        'missing_id' => "Form record ID has not been specified.",
        'missing_model' => 'Form behavior used in :class does not have a model defined.',
        'missing_definition' => "Form behavior does not contain a field for ':field'.",
        'not_found' => 'Form record with an ID of :id could not be found.',
        'action_confirm' => "Are you sure?",
        'create' => 'Create',
        'create_and_close' => 'Create and close',
        'creating' => 'Creating...',
        'creating_name' => 'Creating :name...',
        'save' => 'Save',
        'save_and_close' => 'Save and close',
        'saving' => 'Saving...',
        'saving_name' => 'Saving :name...',
        'delete' => 'Delete',
        'deleting' => 'Deleting...',
        'deleting_name' => 'Deleting :name...',
        'undefined_tab' => 'Misc',
        'field_off' => 'Off',
        'field_on' => 'On',
        'add' => 'Add',
        'apply' => 'Apply',
        'cancel' => 'Cancel',
        'close' => 'Close',
        'confirm' => 'Confirm',
        'reload' => 'Reload',
        'ok' => 'OK',
        'or' => 'or',
        'confirm_tab_close' => 'Do you really want to close the tab? Unsaved changes will be lost.',
        'behavior_not_ready' => 'Form behavior has not been initialized, check that you have called initForm() in your controller.',
        'preview_no_files_message' => 'Files are not uploaded',
        'select' => 'Select',
        'select_all' => 'all',
        'select_none' => 'none',
        'select_placeholder' => 'please select',
        'insert_row' => 'Insert Row',
        'delete_row' => 'Delete Row',
        'concurrency_file_changed_title' => "File was changed",
        'concurrency_file_changed_description' => "The file you're editing has been changed on disk by another user. You can either reload the file and lose your changes or override the file on the disk.",
    ],
    'relation' => [
        'missing_definition' => "Relation behavior does not contain a definition for ':field'.",
        'missing_model' => "Relation behavior used in :class does not have a model defined.",
        'invalid_action_single' => "This action cannot be performed on a singular relationship.",
        'invalid_action_multi' => "This action cannot be performed on a multiple relationship.",
        'help' => "Click on an item to add",
        'related_data' => "Related :name data",
        'add' => "Add",
        'add_selected' => "Add selected",
        'add_a_new' => "Add a new :name",
        'cancel' => "Cancel",
        'add_name' => "Add :name",
        'create' => "Create",
        'create_name' => "Create :name",
        'update' => "Update",
        'update_name' => "Update :name",
        'remove' => "Remove",
        'remove_name' => "Remove :name",
        'delete' => "Delete",
        'delete_name' => "Delete :name",
        'delete_confirm' => "Are you sure?",
    ],
    'model' => [
        'name' => "Model",
        'not_found' => "Model ':class' with an ID of :id could not be found",
        'missing_id' => "There is no ID specified for looking up the model record.",
        'missing_relation' => "Model ':class' does not contain a definition for ':relation'.",
        'invalid_class' => "Model :model used in :class is not valid, it must inherit the \Model class.",
        'mass_assignment_failed' => "Mass assignment failed for Model attribute ':attribute'.",
    ],
    'warnings' => [
        'tips' => 'System configuration tips',
        'tips_description' => 'There are issues you need to pay attention to in order to configure the system properly.',
        'permissions'  => 'Directory :name or its subdirectories is not writable for PHP. Please set corresponding permissions for the webserver on this directory.',
        'extension' => 'The PHP extension :name is not installed. Please install this library and activate the extension.'
    ],
    'editor' => [
        'menu_label' => 'Code editor preferences',
        'menu_description' => 'Customize your code editor preferences, such as font size and color scheme.',
        'font_size' => 'Font size',
        'tab_size' => 'Tab size',
        'use_hard_tabs' => 'Indent using tabs',
        'code_folding' => 'Code folding',
        'word_wrap' => 'Word wrap',
        'highlight_active_line' => 'Highlight active line',
        'show_invisibles' => 'Show invisible characters',
        'show_gutter' => 'Show gutter',
        'theme' => 'Color scheme',
    ],
    'tooltips' => [
        'preview_website' => 'Preview the website'
    ],
    'mysettings' => [
        'menu_label' => 'My Settings',
        'menu_description' => 'Settings relate to your administration account',
    ],
    'myaccount' => [
        'menu_label' => 'My account',
        'menu_description' => 'Update your account details such as name, email address and password.',
        'menu_keywords' => 'security login'
    ],
    'branding' => [
        'menu_label' => 'Customize back-end',
        'menu_description' => 'Customize the administration area such as name, colors and logo.',
        'brand' => 'Brand',
        'logo' => 'Logo',
        'logo_description' => 'Upload a custom logo to use in the back-end.',
        'app_name' => 'App Name',
        'app_name_description' => 'This name is shown in the title area of the back-end.',
        'app_tagline' => 'App Tagline',
        'app_tagline_description' => 'This name is shown on the sign in screen for the back-end.',
        'colors' => 'Colors',
        'primary_light' => 'Primary (Light)',
        'primary_dark' => 'Primary (Dark)',
        'secondary_light' => 'Secondary (Light)',
        'secondary_dark' => 'Secondary (Dark)',
        'styles' => 'Styles',
        'custom_stylesheet' => 'Custom stylesheet'
    ],
    'backend_preferences' => [
        'menu_label' => 'Back-end preferences',
        'menu_description' => 'Manage your account preferences such as desired language.',
        'locale' => 'Language',
        'locale_comment' => 'Select your desired locale for language use.',
    ],
    'access_log' => [
        'hint' => 'This log displays a list of successful sign in attempts by administrators. Records are kept for a total of :days days.',
        'menu_label' => 'Access log',
        'menu_description' => 'View a list of successful back-end user sign ins.',
        'created_at' => 'Date & Time',
        'login' => 'Login',
        'ip_address' => 'IP address',
        'first_name' => 'First name',
        'last_name' => 'Last name',
        'email' => 'Email',
    ],
    'filter' => [
      'all' => 'all'
    ]
];
