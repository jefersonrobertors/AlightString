<?php

declare(strict_types=1);

namespace your\namespace;

use pocketmine\utils\TextFormat;

final class AlightString {

    /**
     * @param string $input
     * @return string
     */
    public static function center(string $input) : string {
        $lines_clean = explode("\n", TextFormat::clean($input));
        $maxLength = max(array_map('strlen', $lines_clean));
        $lines = explode("\n", $input);

        foreach($lines as $key => &$line) {
            $delta = (int) (($maxLength - strlen($lines_clean[$key])) / 2);
            if($delta > 0) {
                $add = str_repeat(' ', $delta);
                $line = $add . $line;
            }
        } 
        return implode("\n", $lines);
    }
}
?>