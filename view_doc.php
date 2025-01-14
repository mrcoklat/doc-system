<?php 
// Require login authentication to access this page
require_once 'database.php'; 
require_once 'function.php'; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Standard meta tags for responsive design -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Documents</title>

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="css/tailwind.output.css" />

    <!-- Quill CSS -->
    <link rel="stylesheet" href="css/quill-table-better.css" />

    <!-- Document Search JS -->
    <link rel="stylesheet" href="js/document-search.js" />

  </head>
  <body>
    <!-- Main container -->
    <div class="flex h-screen bg-gray-50">

      <div class="flex flex-col flex-1 w-full">

        <main class="h-full pb-16 overflow-y-auto">
          <div class="container grid px-6 mx-auto">
            <!-- Page title with responsive display -->
            <h2 class="my-6 text-2xl font-semibold text-gray-700">
              <div class="md:block hidden">Documents</div>
              <div class="md:hidden block">Documents</div>
            </h2>

            <!-- Documents table container -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">

                <!-- Search input -->
                <div class="flex justify-end mb-4">
                  <div class="relative w-full focus-within:text-purple-500">
                    <div class="absolute inset-y-0 flex items-center pl-2">
                      <svg
                        class="w-4 h-4"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                    </div>
                    <input
                      id="searchInput"
                      class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                      type="text"
                      placeholder="Search documents"
                      aria-label="Search"
                    />
                  </div>
                </div>

                <!-- Documents table -->
                <table class="w-full whitespace-no-wrap">
                  <!-- Table header -->
                  <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50"
                      >
                        <th class="px-4 py-3">Title</th>
                        <th class="px-4 py-3 md:block hidden">Date</th>
                        <th class="px-4 py-3">Actions</th>
                      </tr>
                  </thead>
                  
                  <!-- Table body -->
                  <tbody class="bg-white divide-y">
                    <!-- Fetch documents using custom function -->
                    <?php $documents = Documents($conn); ?>
                    
                    <!-- Iterate through documents and display in table rows -->
                    <?php foreach($documents as $document) { ?>
                      <tr class="text-gray-700">
                        <!-- Document title column -->
                        <td class="px-4 py-3 text-sm">
                          <?php echo $document['title']; ?>
                        </td>

                        <!-- Document date column with formatted date -->
                        <td class="px-4 py-3 text-sm md:block hidden">
                          <?php echo Format_Date_Time($document['date']); ?>
                        </td>

                        <!-- Actions column with view and print options -->
                        <td class="px-4 py-3">
                          <div class="flex items-center space-x-4 text-sm">

                            <!-- Print document link -->
                            <a
                              href="print_doc.php?id_doc=<?php echo $document['id_doc']; ?>"
                              target="_blank"
                              class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg focus:outline-none focus:shadow-outline-gray"
                              aria-label="Print"
                            >
                              <!-- Print icon -->
                              <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                              >
                                <path 
                                  d="M19 8h-1V3H6v5H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zM8 5h8v3H8V5zm8 14H8v-4h8v4zm4-4h-2v-2H6v2H4v-4c0-.55.45-1 1-1h14c.55 0 1 .45 1 1v4z"
                                />
                                <path 
                                  d="M18 11.5c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"
                                />
                              </svg>
                            </a>
                          </div>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>