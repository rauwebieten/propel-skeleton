# Project skeleton with Propel & database fixtures

## Config file

propel.ini should NOT be in VCS.  
cp propel.ini.dist to propel.ini and enter your db credentials.

## Build commands

```
propel config:convert --config-dir propel/config

propel migration:diff --config-dir propel/config
propel migration:migrate --config-dir propel/config
propel model:build --config-dir propel/config

php propel/fixtures.php
```