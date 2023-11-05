
<!-- File handling in programming allows you to read, write, manipulate, and closing files on your computer. Here are the basic steps involved in file handling, along with a simple example in PHP: -->

<?php

//  Opening a File:
// To work with a file, you must open it using the fopen() function. This function takes two parameters: the file path and the mode (e.g., "r" for reading, "w" for writing, "a" for appending). For example: 
$file = fopen("my_file.txt", "r");  // Opens "example.txt" for reading.

// Reading from a File:
// If you opened the file in read mode, you can read its contents using functions like fgets(), fread(), or file_get_contents():
$content = fread($file, filesize("example.txt"));  // Reads the entire file content.

// Writing to a File:
// To write to a file, you need to open it in write mode ("w"):
$file = fopen("output.txt", "w");
fwrite($file, "Hello, world!");

// Appending to a File:
// To append content to an existing file without overwriting it, use append mode ("a"):
$file = fopen("existing_file.txt", "a");
fwrite($file, "Appending some text.");

// Closing a File:
// It's important to close the file when you're done to release system resources. Use the fclose() function:
fclose($file);

