<?php

    class AnagramGenerator
    {
        function makeAnagram($input, $dict)
        {
            $result = false;
            if ($input && $dict)
            {
                $input = strtolower(str_replace(" ","", $input));
                $dict = strtolower(str_replace(" ","", $dict));
                $input = str_split($input);
                $dict = str_split($dict);
                sort($input);
                sort($dict);
                if ($input === $dict) {
                    $result = true;
                }
            }
            return $result;
        }

    }
?>
