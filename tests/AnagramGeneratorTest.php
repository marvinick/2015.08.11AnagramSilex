<?php

    require_once "src/AnagramGenerator.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeAnagram()
        {
            //Arrange
            $test_makeAnagram = new AnagramGenerator;
            $input = "bread";

            //Act
            $result = $test_AnagramGenerator->makeAnagram($input);

            //Assert
            $this->assertEquals("beard", $result);
        }
    }

?>
