WGTOTW
Team Fortress 2 (TF2) Forum
=========

Detta projekt innehåller slutuppgiften för PHPMVC kurs på Blekinge Tekniska Högskolan (BTH).
Länk till beskrivning av uppgiften: http://dbwebb.se/phpmvc-v2/kmom10

Detta projekt innehåller forumets struktur och moduler för att upprätthålla det.



Installation
------------------

Innan dessa steg uppfylls skall man ha composer (https://getcomposer.org/) installerat,

1) Klona följande repository: https://github.com/MasterYolo/WTGOTW.git

2) Gå in i projektmappen och ta bort "vendor" mappen.

3) Kör composer med följande kommandon: "composer validate" samt "composer install" för att installera dependencies.

4) Gå till app mappen, sedan config mappen. Öppna database_mysql.php och skriv databasuppgifter.

5) Sist, importera SQL tabeller från sqlimport.sql i "sql" mappen, genom din databashanterare.

Användning av externa bibliotek
-----------------------------------

Följande externa bibliotek används och har varje licens inkluderat som följande:

### PHP Markdown
* Website: http://michelf.ca/projects/php-markdown/
* Version: 1.4.0, November 29, 2013
* License: PHP Markdown Lib Copyright © 2004-2013 Michel Fortin http://michelf.ca/
* Path: included in `3pp/php-markdown`

### Modernizr
* Website: http://modernizr.com/
* Version: 2.6.2
* License: MIT license
* Path: included in `webroot/js/modernizr.js`

### Semantic grid
* Website: http://tylertate.github.io/semantic.gs/
* Version: 1.2, January 11, 2012
* License: Licensed under Apache 2.0. See LICENSE
* Path: included in webroot/css/anax-grid/semantic.gs

### Lessphp

* Website: http://leafo.net/lessphp
* Version: 0.4.0
* License: Copyright (c) 2013 Leaf Corcoran, http://leafo.net/lessphp
* Path: included in webroot/css/anax-grid/lessphp/lessc.inc.php




