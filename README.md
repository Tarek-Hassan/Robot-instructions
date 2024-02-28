# README

This README would normally document whatever steps are necessary to get your application up and running.

## Overview
The  Application that parses Robot instructions and save the final position to a file. It consists of two main components:

1. **Robot Movement**: Handles the processing of robot movement instructions and calculates the final position of the robot.
2. **File Writer**: Manages the writing of the final position to a file.

## Installation

To install and use the PHP Robot Movement and File Writing application, follow these steps:

1. Clone the repository to your local machine:

    ```bash
    git clone https://github.com/Tarek-Hassan/Robot-instructions.git
    ```

2. Navigate to the project directory:

    ```bash
    cd Robot-instructions
    ```

3. Install dependencies using Composer:

    ```bash
    cd Tests
    composer install
    ```

## Usage

To use the application, follow these steps:

1. Run the application using the following command:

    ```bash
    php index.php
    ```
    OR

    ```bash
       Click on run.bat
    ```

2. You will be prompted to enter the robot instructions and the output file name.

3. Once you provide the instructions and the file name, the application will process the instructions, calculate the final position  and save the result to file.

## Testing

The application includes unit tests to ensure its correctness and reliability. To run the unit tests, use the following command:

    ```bash
    cd Tests
    ./vendor/bin/phpunit
    ```
        OR

    ```bash
       Click on runUnitTest.bat
    ```
