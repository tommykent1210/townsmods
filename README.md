townsmods
=========

TownsMods.net Github


=========

When adding sidebar items to /docs/sidebars/docs.php, add a PHP array contianing 3 items:

array({PAGE NAME}, {PAGE URL NAME}, {ICON CLASS});

for icon classes, please see: http://fortawesome.github.io/Font-Awesome/icons/
for the page name, you may use spaces and upper case letters
for page url name, you must use lower case, and you may use "_",


When making a .blade.php file for a page the following rules apply:
- if the URL ends with "getting_started", the file will be "gettingstarted.blade.php"
- if the URL ends with "test-gettingstarted", the file will be in the "test" folder, with the name "gettingstarted.blade.php
- do not use capitals or underscores in filenames!



Thanks
