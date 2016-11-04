# Memcached Speed Booster

Extension reduces server load and speed up the issuance of a page.
Memcached Speed Booster adds all SELECT results to the RAM memory via memcached automatically.

**FEATURES**

+ All select queries caching automatically
+ 100% compatible with all templates and modules
+ 100% modular without any patches & vQmod (configuration only)
+ 100% Open Source under the GNU GPL v.3

**REQUIREMENTS**

1. memcached
2. php5-memcached

**INSTALLATION**

1. Copy all files into the web directory.
2. Change your database driver to mysqli_memcached (config.php)
3. Change your cache driver to null (index.php)

**NOTES AND RECOMMENDATIONS**

1. Do not apply this changes to the admin config.php
2. Default cache driver will be disabled
3. Be sure that your server have a free RAM space and memcached extension pre-installed

Cheers!
