<?php
require 'SimpleRobotMovement.php';
require 'SimpleFileWriter.php';

do {
    $instructions = trim(readline("Enter The Robot instructions('F', 'B', 'R', 'L'): "));
    if (empty($instructions)) {
        echo "Instructions cannot be empty. Please try again.\n";
    }
} while (empty($instructions));

$outputFile = trim(readline("Enter output file name (default: output.txt): ")) ?: 'output';

$robotMovement = new SimpleRobotMovement($instructions);
$fileWriter = new SimpleFileWriter();

try {
    $robotMovement->move();
    $result = $robotMovement->getFinalPosition();
    if ($result) {
        $fileWriter->writeToFile($outputFile, $result);
        echo "Output file created: $outputFile\n";
    }
    $ignoredInstructions = $robotMovement->getIgnoredInstructions();
    if ($ignoredInstructions) {
        $fileWriter->writeToFile('ignored', $ignoredInstructions);
        echo "Ignored file created: ignored.txt\n";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
