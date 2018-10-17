## Student Attendance Management System (SAMS)

## How to Install

Run the following commands in composer: 

```
- git clone git@gitlab.com:sihabcse21/sams.git

- composer install
```

Add a `.env` file and config your database connection. And finally:

```
- composer dump-autoload

- php artisan key:generate

- php artisan migrate

- php artisan db:seed
```

## Default User
 - username: user_admin
 - password: 123456
