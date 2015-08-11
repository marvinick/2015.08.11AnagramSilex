<?php

    class AnagramGenerator
    {

        function makeAnagram($input)
        {
            $input_list_words = array('\n', file_get_contents (https://docs.oracle.com/javase/tutorial/collections/interfaces/examples/dictionary.txt));

            $input = (strtolower($input));
            $input_array_of_char = explode(" ", $input);
            $output_anagram = array();

            foreach ($input_array_of_char as $char) {
                if (in_array($char, $input_list_words)) {
                    array_push($output_anagram, $char);
                else
                    echo "The word you entered has no anagram.";
                }
            }

            $anagram_together = implode(" ", $output_anagram);

        }
    }

?>
