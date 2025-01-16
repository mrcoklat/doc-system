<?php
require_once 'database.php';
require_once 'function.php';

$id_doc = $_GET['id_doc'];

$document = SpecificDocument($conn, $id_doc);

// Calculate width for signature line
$nameWidth = strlen($document['name']);
$hrWidth = min(max(20, $nameWidth + 10), 35);

$header = '
<div class="custom-header mt-5 flex items-center space-x-4">
    <img src="img/top_logo.png" class="border-2 border-black" alt="Company Logo" width="150">
    <div>
        <h1 class="text-3xl font-bold">COMPANY NAME</h1>
        <div class="text-sm font-bold">' . $document['unique_id'] . '</div>
    </div>
</div>
';

$opening = '
<div>
    <div class="mt-16 flex justify-between">
        <div>' . $document['name'] . '</div>
        <div>' . Format_Date($document['date']) . '</div>
    </div>
    
    <div>' . commaOnce($document['salutation']) . '</div>
    
    <div class="font-bold">' 
        . $document['title'] . '
    </div>
</div>
';

$paragraph = '
<div class="text-justify">' 
    . nl2br($document['paragraph']) . '
</div>
';

$closing = '
<div class="mt-7">
    <div class="mb-7">' . 
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

?>
<!DOCTYPE html>
<html>

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
    <link rel="stylesheet" href="css/quill-table-better.css">
</head>

<style>
/* Styles go here */

body {
    display: none;
}

.custom-header {
    font-family: 'Trebuchet MS', sans-serif;
}

.page-header, .page-header-space {
  height: 110px;
}

.page-footer, .page-footer-space {
  height: 140px;
}

.page-footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  border-top: 1px solid black; /* for demo */
  background: yellow; /* for demo */
}

.page-header {
  position: fixed;
  top: 0mm;
  width: 100%;
  border-bottom: 1px solid black; /* for demo */
  background: yellow; /* for demo */
}

.page {
  page-break-after: always;
}

@page {
  margin: 0;
}

@media print {
    thead {display: table-header-group;} 
    tfoot {display: table-footer-group;}
    
    button {display: none;}
    
    body { 
        margin: 0;
        display: block;
        font-family: 'Times New Roman', Times, serif, sans-serif;
    }
}
</style>

<body>

  <div class="page-header" style="text-align: center">
    <img id="top_frame" src="img/top.png" alt="Top Frame Picture">
  </div>

  <div class="page-footer">
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
        <img src="img/bottom_logo.png" alt="Bottom Logo" class="border-2 border-black fixed right-10 bottom-7 w-1/5">
    </div>
    <img id="bottom_frame" src="img/bottom.png" alt="Bottom Frame Picture" class="fixed bottom-0 w-full">
  </div>

  <table>

    <thead>
      <tr>
        <td>
          <!--place holder for the fixed-position header-->
          <div class="page-header-space"></div>
        </td>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>
            <!--*** CONTENT GOES HERE ***-->
            <div class="page mx-12" style="line-height: 1.6; font-size: 14px;">
                
                <?php echo $header; ?>

                <div class="mx-12">
                    <?php
                        echo $opening;
                        echo $paragraph;
                        echo $closing;
                    ?>
                </div>

            </div>
        </td>
      </tr>
    </tbody>

    <tfoot>
      <tr>
        <td>
          <!--place holder for the fixed-position footer-->
          <div class="page-footer-space"></div>
        </td>
      </tr>
    </tfoot>

  </table>

</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        window.print();
    });
</script>

</html>