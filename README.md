# ProjectA Application

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Install running the  `php composer.phar install` command, this command will install all the dependecy packages (composer.json is the package manager).

2. Run (development mode)
```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Every new update might have changes on the composer requirements so run `php composer.phar install` this way it will work the new changes

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.


## Sending Code to Live

1. Log into the live server via SSH
2. log as sudo
`sudo -i`
3. Go to the root folder of the website on this case 
`cd /var/www/html/www.treeve.io/`
4. Now PULL from Git
`git pull` 
5. Now Clear all PHP Cahce
`bin/cake cache clear_all`
That should be it, all files are on the liver server

