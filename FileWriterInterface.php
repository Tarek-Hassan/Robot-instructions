<?php

interface FileWriterInterface
{
    public function writeToFile(string $outputFile, string $content, string $ext = 'txt'): void;
}
