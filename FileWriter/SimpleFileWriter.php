<?php
require 'FileWriterInterface.php';

class SimpleFileWriter implements FileWriterInterface
{
    public function writeToFile(string $outputFile, string $content, string $ext = 'txt'): void
    {
        $fileName = $outputFile . '.' . $ext;
        file_put_contents($fileName, $content . PHP_EOL, LOCK_EX);
    }
}
