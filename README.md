# VolebniKalkulacka.cz

Volební kalkulačka

## Requirements
- PHP >=5.3
- Smarty 3
- Python 3 (optional, for updating only)
- `exec` allowed for PHP (optional, for updating only)

## Instructions

### General
- copy `local_settings-example.json` into `local_settings.json` and set it correctly, this file needs to be readable by www server
- set `smarty/templates_c` writable and readable by www server
- create new file `www/result.txt` and set it writable by www server (e.g., chown user:www-data, chmod 620)

### New App (new calculator)

#### Preparation
- make directory `www/new-app` and copy into it contents from `www/existing-app`
- make directory `smarty/templates/new-app-templates` and copy into it contents from `smarty/templates/existing-app-templates`

#### Front page
- set up frontpage (`www/index.php` or `www/index.html` manually)

#### App settings
- basic settings for the new-app are in `www/new-app/settings.json`, correct them
- it is possible to rewrite general settings (from `www/local_settings.json`) for whole site by these settings

#### Images
- default background image for the new app is set in `www/new-app/settings.json`

#### Languages
Several languages are supported (using parameter `?lang=xx` in the address, `xx` is the ISO code). These needs to be set up in `www/new-app/settings.json` and the files `www/new-app/texts_xx.csv` must exist.

#### Updating
Updating process may be different for any calculator

##### Updating of calculators answered by parties/candidates (example)
- set `www/new-app/backend/` writable by www server
- set correct values in `www/new-app/backend/settings.json`
Update is done by accessing `http(s)://(server_name)/new-app/backend/update.php`

##### Updating of inventories (example)
(TODO)

#### Research questionaire (optional)
A questionaire may be set to be shown before the app:
- direct traffic to `(server)/new-app/research/` (or some part of the traffic)
- set data and texts in `www/new-app/research/data.php`
- create file `www/new-app/research/research.txt` and set it writable by www server (e.g., chown user:www-data)
- only subset of question type may be used (see files `smarty/templates/research.tpl` and `smarty/templates/research-(type).tpl`)
- enable caching: 

#### Customization (optional)
##### Custom space on result page (below the table)
Completely custom part (block) may be specified below the results in the file `smarty/new-app-template/match-lower.tpl`. Leave it blank if nothing is required.
##### Custom CSS
Custom CSS may be set in `www/new-app/settings.json`
##### External customization
It s possible to customize the calculator (if allowed in `www/new-app/settings.json`), quickly or with whole custom css:
- `bg`: url-encoded link to background picture 
(e.g., `http(s)://(server_name)/new-app/?bg=http%3A%2F%2Fexample.com%2Fpicture.jpg`)
- `navbar`: url-encoded html color of the upper navbar 
(e.g., `http(s)://(server_name)/new-app/?navbar=%23CC00FF` or `?navbar=red`)
- `css`: url-encoded link to custom css 
(e.g., `http(s)://(server_name)/new-app/?css=http%3A%2F%2Fexample.com%2Fcustom.css`)

#### Caching
Caching for the app (the test part, not results) is available. Enable (or disable) it:
- nncomment line `include ("cache.php");` in `www/new-app/index.php`
- set `www/new-app/cache/` writable and readable by www server (e.g., `sudo chown user:www-data cache`)
- length of cache may be set in `www/new-app/cache.php`

#### Click registration (optional)
- set it in `www/new-app/settings.json`
- create new file `www/new-app/click.txt` and set it writable by www server (e.g., chown user:www-data, chmod 620)
