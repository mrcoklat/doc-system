<?php
require_once 'database.php';
require_once 'function.php';

$id_doc = $_GET['id_doc'];

$document = SpecificDocument($conn, $id_doc);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $document['title']; ?></title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Header Font -->
    <link href="https://fonts.cdnfonts.com/css/trebuchet-ms-3" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Quill Table Better CSS -->
    <link rel="stylesheet" href="css/quill-table-better.css" />
</head>
<style>
    @page {
        margin: 0;
    }

    body {
        font-family: 'Times New Roman', Times, serif, sans-serif;
        display: none;
    }

    /* Ensure proper footer positioning and prevent overlap */
    @media print {
        body {
            display: block;
        }

        table {
            page-break-inside: avoid;
            width: 100%;
            border-collapse: collapse;
        }

        .page-break {
            display: block;
            page-break-before: auto;
        }

    }

    .custom-header {
        font-family: 'Trebuchet MS', sans-serif;
    }
    
</style>

<body>
    <?php
    // Calculate width for signature line
    $nameWidth = strlen($document['name']);
    $hrWidth = min(max(20, $nameWidth + 10), 35);

    $header = '
        <div id="header" class="custom-header mt-32 flex items-center space-x-4">
            <img src="img/top_logo.png" alt="Company Logo" width="150">
            <div>
                <h1 class="text-3xl font-bold">COMPANY NAME</h1>
                <div class="text-sm font-bold">' . $document['unique_id'] . '</div>
            </div>
        </div>
    ';

    $opening = '
    <div id="opening">
        <div class="mt-16 mb-5 flex justify-between">
            <div>' . $document['name'] . '</div>
            <div>' . Format_Date($document['date']) . '</div>
        </div>
        
        <div class="mb-5">' . commaOnce($document['salutation']) . '</div>
        
        <div class="font-bold mb-5">' 
            . $document['title'] . '
        </div>
    </div>
    ';

    $paragraph = '
        <div id="paragraph" class="text-justify">' 
            . nl2br($document['paragraph']) . '
        </div>
    ';

    $closing = '
    <div id="closing">
        <div class="mt-7 mb-7">' . 
            commaOnce($document['closing']) . '
        </div>
        <div class="w-[' . $hrWidth . '%]">
            <hr class="border-t-1 border-black">
            <div class="text-center flex justify-between">
                <span>(</span>
                <span>' . $document['name'] . '</span>
                <span>)</span>
            </div>
            Finance
        </div>
    </div>
    ';

    $top_frame = '<img id="top_frame" src="img/top.png" alt="Top Frame Picture" class="block fixed top-0 w-full">';
    $bottom_frame = '<img id="bottom_frame" src="img/bottom.png" alt="Bottom Frame Picture" class="block fixed bottom-0 w-full">';

    echo $top_frame;
    ?>

    <div class="page-container">
        <div id="content" class="m-auto" style="width: 88%;">
            <?php echo $header; ?>
            <?php echo $opening; ?>
            <?php echo $paragraph; ?>
            <?php echo $closing; ?>
            <div class="page-break"></div>
        </div>
    </div>

    <div id="footer">
        <div class="mx-24 w-full fixed bottom-[70px] block">
            <hr class="border-t-2 border-black" style="width: 78%;">
            <div class="mt-2 px-3" style="width: 78%;">
                <div class="w-full">
                    <div class="flex justify-between">
                        <div style="width: 55%;">
                            <div class="flex items-center space-x-3">
                                <i class="fa-solid fa-location-dot text-lg"></i>
                                <p>123 Elm Street, Springfield, IL 62704, USA</p>
                            </div>
                        </div>
                        <div style="width: 45%;">
                            <div class="flex items-center space-x-3 pl-5">
                                <i class="fas fa-envelope text-lg"></i>
                                <p>cena@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div style="width: 55%;">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-globe text-lg"></i>
                                <p>www.website.com</p>
                            </div>
                        </div>
                        <div style="width: 45%;">
                            <div class="flex items-center space-x-3 pl-5">
                                <i class="fas fa-phone-alt text-lg"></i>
                                <p>0123456789</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/bottom_logo.png" alt="Bottom Logo" class="fixed right-10 bottom-[40px] w-1/5"> <!-- Adjusted logo position -->
        </div>
    </div>

    <?php
    echo $bottom_frame;
    ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        window.print();
    });
</script>

</body>
</html>
