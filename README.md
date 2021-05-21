# Technical task

## Technology stack

For this project I stuck with what I knew would be awesome to look at and also demonstrate some of Laravel's latest trends.

The project has been developed with the TALL stack ([Tailwind](), [Alpine.js](), [Laravel]() and [Livewire]()).

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
```
---
**NOTE**

If your host system is not running PHP 8 then you will need to add `--ignore-platform-reqs`. to the composer command.

---

Once the PHP and node dependencies have been resolved you can run the [Sail]() containers.

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
That should all that is necessary for the application to be usable.
Just head over to `localhost::8082` and login with the following credentials:
```
email: test@dotfive.com
password: password
```
