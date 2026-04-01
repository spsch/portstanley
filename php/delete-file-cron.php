<?php

// Script to delete denni_ftp.pdf file
// To be run as a CRON job at midnight (0 0 * * *)

// Define the path to the file
$filePath = '../img/denni_nabidka/denni_menu.pdf';  // Replace with your actual file path

// Check if file exists
if (file_exists($filePath)) {
    try {
        // Attempt to delete the file
        if (unlink($filePath)) {
            // Log successful deletion
            error_log(date('Y-m-d H:i:s') . " - Successfully deleted denni_ftp.pdf\n", 3, '/path/to/deletion_log.txt');
        } else {
            // Log failure
            error_log(date('Y-m-d H:i:s') . " - Failed to delete denni_ftp.pdf\n", 3, '/path/to/deletion_log.txt');
        }
    } catch (Exception $e) {
        // Log any exceptions
        error_log(date('Y-m-d H:i:s') . " - Error: " . $e->getMessage() . "\n", 3, '/path/to/deletion_log.txt');
    }
} else {
    // Log if file doesn't exist
    error_log(date('Y-m-d H:i:s') . " - File denni_ftp.pdf not found\n", 3, '/path/to/deletion_log.txt');
}
