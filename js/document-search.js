document.addEventListener('DOMContentLoaded', function() {
  const searchInput = document.getElementById('searchInput');
  const documentRows = document.querySelectorAll('tbody tr');

  searchInput.addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase().trim();

    documentRows.forEach(row => {
      const title = row.querySelector('td:first-child').textContent.toLowerCase();
      const date = row.querySelector('td:nth-child(2)').textContent.toLowerCase();

      if (title.includes(searchTerm) || date.includes(searchTerm)) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });
  });
});
