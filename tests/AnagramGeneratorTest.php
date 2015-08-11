<?php

    require_once "src/AnagramGenerator.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeAnagram()
        {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $dict = array('bread');
            $input = "bread";

            //Act
            $result = $test_AnagramGenerator->makeAnagram($input, $dict);

            //Assert
            $this->assertEquals($dict, $result);
        }
    }

?>
