# Bug in nested resource plugin

When I save a page, which is not scoped to tenant, I get an error that team_id does not exist on the pages table.

## Steps to reproduce

    Clone repo
    Install dependencies
    php artisan app:prepare
    Log in to application
    Try to create a page on the test document

## Login

    email: test@example.com
    password: password


        