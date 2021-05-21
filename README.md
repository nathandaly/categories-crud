# Technical task

## Technology stack

For this project I stuck with what I knew would be awesome to look at and also demonstrate some of Laravel's latest trends.

The project has been developed with the TALL stack ([Tailwind](https://tailwindcss.com/), [Alpine.js](https://github.com/alpinejs/alpine), [Laravel](https://laravel.com/docs/8.x) and [Livewire](https://laravel-livewire.com/)).

## Installation & setup

---
**NOTE**

This project depends on the host running a MacOS, Linux or WSL2 environment with PHP.

---

#### Clone the repository and change into the project directory
```
git clone git@github.com:nathandaly/categories-crud.git
cd categories-crud
```
Copy the example `.env`
```
cp .env.example .env
```
#### Installing dependencies
```
composer install
```
Followed by

```
npm install
npm run dev
```
---
**NOTE**

If your host system is not running PHP 8 then you will need to add `--ignore-platform-reqs`. to the composer command.

---

Once the PHP and node dependencies have been resolved you can run the [Sail](https://laravel.com/docs/8.x/sail#introduction) containers.

```
export APP_PORT=8082 && ./vendor/bin/sail up -d
```
This command will normally take few minutes and will download and build the required containers.

### Database migration and seeding
The project contains migration for the database structure as well as a `DotFive` user and example data which you can seed.
```
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan db:seed
```

### :tada: Up and running :tada:
That should be all that is necessary for the application to be usable.
Just head over to `localhost::8082` and login with the following credentials:
```
email: test@dotfive.com
password: password
```

### Todos:

If I had more time:
- [ ] Testing for livewire components
- [ ] Implement real-time cross browser changes with Laravel events and Echo
- [ ] Implement multiple categories to list edit form
- [ ] Implement add edit and category forms
- [ ] Add ordering logic for items (position field has already been added to the migration)
- [ ] Example CRUD controller logic (with Livewire you can almost go down the non-controller route)
