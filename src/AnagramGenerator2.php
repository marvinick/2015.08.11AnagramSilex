<?php

    class AnagramGenerator
    {

        function findAnagrams($list) {
          $sorted_list = array_map("sortLetters", $list);
          $hash_table = array();
          foreach($sorted_list as $key => $value) {
            if(isset($hash_table[$value])) {
              print $list[$key] . " is anngram of " . $list[$hash_table[$value]] . "\n";
            } else {
              $hash_table[$value] = $key;
            }
          }
        }


        function sortLetters($input) {
          $letters = str_split($input);
          sort($letters);
          return implode($letters);
        }


    }

?>
