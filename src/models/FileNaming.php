<?php

namespace Acme\models;

class FileNaming {

    static function fileNaming(?array $names): array {

        $namesFixed = [];

        foreach ($names as $name) {
            if(!isset($namesFixed[$name])) {
                $namesFixed[$name] = true;
            } else {
                $count = 1;
                while(isset($namesFixed["$name($count)"])) {
                    $count++;
                }
                $namesFixed["$name($count)"] = true;
            }
        }
        return array_keys($namesFixed);
    }
}
