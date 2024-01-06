<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>
  <link rel="stylesheet" href="css/login.css" />

</head>
<style>
  /* Set up basic styling for the body */
  body {
    font-family: Arial, sans-serif;
    /* Specify the font family for the body text */
    background-color: #f4f4f4;
    /* Set the background color for the body */
    margin: 0;
    /* Remove default margin */
    padding: 0;
    /* Remove default padding */
    display: flex;
    /* Use flex display for column layout */
    flex-direction: column;
    /* Set the flex direction to column */
    align-items: center;
    /* Center the items along the cross-axis */
    height: 100vh;
    /* Set the height to 100% of the viewport height */
    background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)),
      url(./assets/img/slideImage2.jpg);
    /* Set a background gradient and image */
    background-size: 250vh;
    /* Consider using 'cover' or 'contain' for background-size */
    background-position: center;
    /* Center the background image */
    background-repeat: no-repeat;
    /* Do not repeat the background image */
  }

  /* Style for the container holding the sign-up form */
  .container {
    background-color: #000000;
    /* Set the background color for the container */
    border-radius: 10px;
    /* Add rounded corners to the container */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    /* Add a subtle box shadow */
    text-align: center;
    /* Center the text within the container */
    padding: 20px;
    /* Add padding to the container */
    opacity: 75%;
    /* Set the opacity of the container */
    margin-top: 20px;
    /* Add margin at the top of the container */
  }

  /* Style for the sign-up form */
  .signup-form {
    max-width: 400px;
    /* Set the maximum width for the form */
    margin: 0 auto;
    /* Center the form horizontally */
  }

  /* Style for the heading in the sign-up form */
  h2 {
    font-size: 24px;
    /* Set the font size for the heading */
    color: #fff;
    /* Set the text color to white */
  }

  /* Style for the form within the sign-up container */
  form {
    display: flex;
    /* Use flex display for column layout */
    flex-direction: column;
    /* Set the flex direction to column */
    gap: 10px;
    /* Add a gap between form elements */
  }

  /* Style for labels in the form */
  label {
    font-weight: bold;
    /* Set the font weight to bold for labels */
    color: #fff;
    /* Set the text color to white for labels */
  }

  /* Style for input fields in the form */
  input {
    padding: 10px;
    /* Add padding to input fields */
    border: 1px solid #009688;
    /* Set the border color for input fields */
    border-radius: 5px;
    /* Add rounded corners to input fields */
  }

  /* Style for the submit button in the form */
  button {
    font-family: monospace;
    background-color: #f39c12;
    color: black;
    border: none;
    border-radius: 8px;
    width: 120px;
    height: 45px;
    transition: .3s;
    margin-right: 100px;
    align-items: center;
  }

  /* Style for the home link container */
  .home-link {
    margin-top: 20px;
    /* Add margin at the top of the home link container */
  }

  /* Style for links within the home link container */
  a {
    text-decoration: none;
    /* Remove the default underline for links */
    color: #fff;
    /* Set the text color to white for links */
    border: solid;
    /* Add a solid border to links */
    border-radius: 25px;
    /* Add rounded corners to links */
    padding-left: 5px;
    /* Add padding to the left of links */
    padding-right: 5px;
    /* Add padding to the right of links */
  }

  /* Style for text within the home link container */
  .home-link p {
    color: #fff;
    /* Set the text color to white for the home link text */
  }

  button:hover {
    background-color: grey;
    box-shadow: 0 0 0 5px #000000;
    color: #fff;
  }
</style>

<body>
  <div class="container">
    <div class="signup-form">
      <h2>login</h2>
      <form action="includes/checkHandler.php" method="post">
        <label for=" Username">Username</label>
        <input type="text" id="Username" name="Username" required />
        <br />

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required />
        <br />

        <pre>

              <button type="submit" name="submit" style="align-items: center">Login</button>
        </pre>

      </form>
    </div>
    <div class="home-link">
      <p>Already have an account? <a href="./register.php">Register </a></p>
    </div>
  </div>

</body>


</html>