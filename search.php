<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search in Navbar</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma/css/bulma.min.css">
</head>
<body style="background-color:#ecf0f1;">
  <!-- Navbar -->
  <nav class="navbar" style="background-color:#fff;">
    <a href="index.php" class="navbar-item">
        <img src="assests/images/logo-bbc-removebg-preview.png" alt="logo" style="height:50px; width:60px; object-fit:cover;">
    </a>
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field has-addons is-small">
          <div class="control is-expanded">
            <input type="text" id="navbarSearchBox" class="input is-small" placeholder="search for -eg., Tesla">
          </div>
          <div class="control">
            <button id="navbarSearchButton" class="button is-small ">Search</button>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Results Container -->
  <section class="section">
    <div class="container">
      <div id="resultsContainer" class="columns is-multiline"></div>
    </div>
  </section>

 

  

<script src="assests/script/search.js"></script>

</body>
</html>