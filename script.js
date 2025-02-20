document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent form submission
    
    const correctPassword = "youtubebad";  // Replace with your own password
    const enteredPassword = document.getElementById('password').value;
    
    if (enteredPassword === correctPassword) {
      // Hide the login form and display the content
      document.getElementById('loginForm').style.display = 'none';
      document.getElementById('errorMessage').style.display = 'none';
      document.getElementById('content').style.display = 'block';
    } else {
      // Show error message if password is incorrect
      document.getElementById('errorMessage').style.display = 'block';
    }
  });
  