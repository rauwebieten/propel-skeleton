# Project skeleton with Propel & database fixtures

```
propel config:convert --config-dir propel/config

propel migration:diff --config-dir propel/config
propel migration:migrate --config-dir propel/config
propel model:build --config-dir propel/config

php propel/fixtures.php
```
