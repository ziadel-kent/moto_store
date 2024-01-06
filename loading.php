<?php
function generateHead()
{
  echo '<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="refresh" content="1;url=index.html" />
        <link rel="stylesheet" href="css/loading.css"/>
        <title>Loading Page</title>
      </head>';
}

function generateBody()
{
  echo '<body>
    <header>
      <h1>Loading...</h1>
    </header>
      <div class="loader"></div>
    </body>
  </html>';
}

function generatePage()
{
  generateHead();
  generateBody();
}

// Call the function to generate the entire page
generatePage();
