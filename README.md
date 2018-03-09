# SPOT | the parking app

Would you like me to find you a parking SPOT? SPOT is a mySQL/Laravel/Vue based app that allows users to interact with our parking garage. They can get a ticket, pay their ticket, see how much parking is available.

## Built With

* mySQL
* Laravel
* Vue.js

## Seeded Database

The database makes use of laravel seeder to populate all the fields with dummy data for you to better visualize how a user might navigate through the experience.

## Two Versions

There are two versions of this app. The first (master branch) is built using Vue, the Vue-Router and Eloquent API Resource controllers. The second, (dev.nam.php branch) utilizes Laravel Resource Controllers and blade views.

## Let's Take A Look!

1 Clone the repo and run `npm install` 

2 Let's migrate and seed all at once! `php artisan migrate --seed`

4 Which branch you would like to view first?
	- `git checkout master`
	- `git checkout dev.nam.php`

5 Next run `npm watch` to compile the assets into the public folder

6 Serve up the project with `php artisan serve` and enjoy on localhost:8000/home





