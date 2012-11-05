<?php
class Game {

    public function count($filename) {
        $lines = file($filename, FILE_IGNORE_NEW_LINES);

        $multiline = false;

        foreach($lines as $key => &$line) {
            $line = trim($line);

            if(strpos($line,'*/') !== false && $multiline) {
                unset($lines[$key]);
                $multiline = false;
            } elseif ($multiline) {
                unset($lines[$key]);
            } elseif(strlen($line) == 0 || ($line[0] == '/' && $line[1] == '/')) {
                unset($lines[$key]);         
            } elseif(strpos($line,'/*') !== false && strpos($line,'*/') == false) {
                unset($lines[$key]);
                $multiline = true;
            }

        }

        return count($lines);
    }

}
