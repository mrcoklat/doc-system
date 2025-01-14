<?php 
require_once 'database.php'; 
require_once 'function.php'; 

if(isset($_POST['add_document'])) {
  $positionCode = getPositionCode("Finance");
  $timestamp = time();
  $unique_id = $positionCode . "-" . $timestamp;
    
  $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $salutation = filter_var($_POST['salutation'], FILTER_SANITIZE_STRING);
  $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
  $closing = filter_var($_POST['closing'], FILTER_SANITIZE_STRING);
  $paragraph = htmlspecialchars_decode($_POST['paragraph']);
    
  // Process and save media files
  $paragraph = saveBase64Media($paragraph, $unique_id);
    
  $stmt = mysqli_prepare($conn, "INSERT INTO tbl_document (unique_id, name, salutation, title, paragraph, closing) VALUES (?, ?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, "ssssss", $unique_id, $name, $salutation, $title, $paragraph, $closing);
    
  if(mysqli_stmt_execute($stmt)) {
      header("Location: index.php");
      exit();
  }
  mysqli_stmt_close($stmt);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Document</title>

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="css/tailwind.output.css" />

    <!-- Quill CSS -->
    <link rel="stylesheet" href="css/quill-table-better.css" />

  </head>
  <body>
    <div class="flex h-screen bg-gray-50">
      
      <div class="flex flex-col flex-1">

        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700">
              Add Document
            </h2>

            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
              <!-- Document creation form -->
              <form method="POST" action="index.php" enctype="multipart/form-data">
                <!-- Name input field -->
                <label class="block text-sm">
                  <span class="text-gray-700">Name</span>
                  <input
                    name="name"
                    class="block w-full mt-1 text-sm form-input"
                    placeholder="Name"
                    required
                  />
                </label>

                <!-- Salutation input field -->
                <label class="mt-4 block text-sm">
                  <span class="text-gray-700">Salutation</span>
                  <input
                    name="salutation"
                    class="block w-full mt-1 text-sm form-input"
                    placeholder="Salutation"
                    required
                  />
                </label>

                <!-- Title input field -->
                <label class="mt-4 block text-sm">
                  <span class="text-gray-700">Title</span>
                  <input
                    name="title"
                    class="block w-full mt-1 text-sm form-input"
                    placeholder="Title"
                    required
                  />
                </label>

                <!-- Paragraph input field -->
                <label class="mt-4 block text-sm">
                  <span class="text-gray-700">Content</span>
                </label>
                <?php require_once 'paragraph-field.php'; ?>

                <!-- Closing input field -->
                <label class="mt-4 block text-sm">
                  <span class="text-gray-700">Closing</span>
                  <input
                    name="closing"
                    class="block w-full mt-1 text-sm form-input"
                    placeholder="Closing"
                    required
                  />
                </label>

                <!-- Submit button for adding document -->
                <input
                  type="submit"
                  name="add_document"
                  value="Add Document"
                  class="mt-4 block w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                ></input>
                
              </form>
            </div>

          </div>
        </main>
      </div>
    </div> 

  </body>
</html>