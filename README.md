# Gig management application

## Setup

Clone the repo

```
git clone https://github.com/carnage-mode/gig-listings
```

Install composer dependencies

```
composer install
```

Install npm dependencies

```
npm install
```

Copy the `.env` file, and setup the database there as needed (default is `sqlite`)

```
cp .env.example .env
```

Perfrom database migrations

```
php artisan migrate
```

To use the dev server, run the following commands in a terminal window

```
php artisan serve
```

```
npm run dev
```
