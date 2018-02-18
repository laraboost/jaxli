# Jaxli

This is an open source feature request system.

## STILL UNDER DEVELOPMENT

## Installation

### Prerequisites

* To run this project, you must have PHP 7 installed.
* You should setup a host on your web server for your local domain. For this you could also configure Laravel Homestead or Valet.

### Step 1

Begin by cloning this repository to your machine, and installing all Composer & NPM dependencies.

```bash
git clone git@github.com:laraboost/jaxli.git
cd jaxli && composer install && npm install
php artisan migrate
npm run dev
```

### Step 2

Next, boot up a server and visit your feature request site. If using a tool like Laravel Valet, of course the URL will default to `http://jaxli.test`.