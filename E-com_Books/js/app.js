document.getElementById('myForm').addEventListener('submit', function(e) {
    e.preventDefault();
    document.getElementById('popup').style.display = 'flex';
  });
  
  document.getElementById('closeBtn').addEventListener('click', function() {
    document.getElementById('popup').style.display = 'none';
  });
  