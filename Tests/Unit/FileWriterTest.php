<?php

use PHPUnit\Framework\TestCase;


require './../FileWriter/SimpleFileWriter.php';

class FileWriterTest extends TestCase
{
    public function testWriteToFile()
    {
        $fileWriter = new SimpleFileWriter();
        $fileWriter->writeToFile('test_output', 'Test content');
        $this->assertFileExists('test_output.txt');
        $expectedContent = "Test content" . PHP_EOL; 
        $this->assertStringEqualsFile('test_output.txt', $expectedContent);
        unlink('test_output.txt');
    }
}
