<?php

namespace propel;

use Symfony\Component\Yaml\Yaml;

require_once __DIR__ . '/../vendor/autoload.php';
require_once 'generated-conf/config.php';


foreach (glob(__DIR__ . '/fixtures/*.yml') as $file) {
    $data = Yaml::parse(file_get_contents($file));
    foreach ($data as $className => $array) {
        foreach ($array as $row) {
            $queryClass = $className . 'Query';

            $exists = (new $queryClass)->findPk($row['PK']);
            if (!$exists) {
                $obj = new $className;
                $obj->fromArray($row);
                $obj->save();
            }
        }
    }
}


