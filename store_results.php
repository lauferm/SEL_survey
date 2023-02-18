#!/usr/bin/php


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $initial_mood = $_POST['initial_mood'];
    $final_mood = $_POST['final_mood'];

// Create a string with the form data
    $data = "Name: $name\nInitial Mood: $initial_mood\nFinal Mood: $final_mood\n\n";

    // Write the data to a file
    $file = fopen('results.txt', 'a');
    fwrite($file, $data);
    fclose($file);
}
?>


echo "Data stored successfully!";
