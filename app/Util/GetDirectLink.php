<?php

namespace App\Util;

function getDirectDownloadLink($originalLink) {
    // Extract file ID from shareable link
    preg_match('/\/d\/([^\/]+)/', $originalLink, $matches);
    $fileId = $matches[1] ?? null;
    
    // Create direct download link
    $googleDriveApiKey = 'AIzaSyCeMLcKmACqBHfR8euVzdJGdVF7aZE3NDE';
    return "https://www.googleapis.com/drive/v3/files/{$fileId}?alt=media&key={$googleDriveApiKey}";
}