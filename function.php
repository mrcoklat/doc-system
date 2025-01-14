<?php

function commaOnce($variable) 
{
    return trim(preg_replace('/,\s*,/', ',', $variable));
}

function Format_Date($date) {
    // Create DateTime object from input
    $date = new DateTime($date);
    // Return formatted date (day.month.year)
    return $date->format('j.n.Y');
}

function Format_Date_Time($dateTime) {
    // Create DateTime object from input
    $date = new DateTime($dateTime);
    // Return formatted date (day.month.year hour:minute AM/PM)
    return $date->format('j.n.Y g:i A');
}

function Documents($conn) {
    // SQL query to select all documents
    $sql = "SELECT * FROM tbl_document";
    
    // Execute the query
    $result = mysqli_query($conn, $sql);
    
    // Fetch all documents
    $documents = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // Return the documents
    return $documents;
}

function SpecificDocument($conn, $id_doc) {
    // SQL query to select a specific document
    $sql = "SELECT * FROM tbl_document WHERE id_doc = ?";
    
    // Prepare and execute statement
    $stmt = mysqli_prepare($conn, $sql);
    
    // Bind document ID parameter
    mysqli_stmt_bind_param($stmt, "i", $id_doc);
    
    // Execute the statement
    mysqli_stmt_execute($stmt);
    
    // Get the result
    $result = mysqli_stmt_get_result($stmt);
    
    // Fetch the document row
    $document = mysqli_fetch_assoc($result);
    
    // Return the document
    return $document;
}

function getPositionCode($position) {
    $words = explode(' ', $position);
    $code = '';
    foreach($words as $word) {
        $code .= strtoupper(substr($word, 0, 1));
    }
    return $code;
}

function getBaseUrl() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];
    $baseDir = dirname($_SERVER['PHP_SELF']);
    return $protocol . $host . $baseDir;
}

function saveBase64Media($content, $unique_id) {
    $upload_path = 'doc_img/';
    $absolute_path = dirname(__FILE__) . '/' . $upload_path;

    if (!file_exists($absolute_path)) {
        mkdir($absolute_path, 0777, true);
    }

    $pattern = '/<img[^>]+src="(data:image\/[^;]+;base64[^"]+)"/i';
    preg_match_all($pattern, $content, $matches);

    foreach ($matches[1] as $key => $base64) {
        list($type, $data) = explode(';', $base64);
        list(, $data) = explode(',', $data);
        $imgData = base64_decode($data);
    
        $extension = explode('/', $type)[1];
        $filename = $unique_id . '_' . ($key + 1) . '.' . $extension;
        $filepath = $absolute_path . $filename;
    
        file_put_contents($filepath, $imgData);
    
        $web_path = getBaseUrl() . '/' . $upload_path . $filename;
        $content = str_replace($base64, $web_path, $content);
    }

    return $content;
}

?>