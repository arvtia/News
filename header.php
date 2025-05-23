<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCC News</title>
    <link rel="icon" type="image/x-icon" href="assests/images/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <!-- <link rel="stylesheet" href="assets/stylesheet/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
    <link rel="stylesheet" href="assests/stylesheet/style.css">

</head>
<body>

<!-- CSS -->
<style>
  .navbar-dropdown {
    display: none; /* Initially hidden */
  }
  .navbar-dropdown.is-active {
    display: block; /* Display dropdown when active */
  }
</style>



<!-- navbar- -->

<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
  <div class="navbar-brand">
    <a class="navbar-item">
        <img src="assests/images/logo-bbc-removebg-preview.png" alt="logo" style="height:50px; width:60px; object-fit:cover;">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a href="index.php" class="navbar-item">
        <span>
          Home
        </span>
        <span>
          <i class="fas fa-home px-2"></i>
        </span>
      </a>
      <a href="space.php" class="navbar-item">
        <span>
          Space
        </span>
        <span>
          <i class="fas fa-space-shuttle px-2"></i>
        </span>
      </a>

      <a href="business.php" class="navbar-item">
        <span>
          Business
        </span>
        <!-- <span>
          <i class="fas fa-space-shuttle px-2"></i>
        </span> -->
      </a>
      <a href="technology.php" class="navbar-item">
        <span>
          Technology
        </span>
        <span>
          <i class="fas fa-desktop px-2"></i>
        </span>
      </a>
      <a href="entertainment.php" class="navbar-item">
        <span>
          Entertainment
        </span>
        <span>
          <i class="fas fa- px-2"></i>
        </span>
      </a>

      <!-- HTML -->
        <div class="navbar-item has-dropdown is-hoverable" id="dropdownNavicon">
        <a class="navbar-link" id="dropdownToggle">
            International
        </a>
        <div class="navbar-dropdown" id="dropdownMenu">
            <a class="navbar-item">
            <span>Broadcast journalism</span>
            <span><i class="fas fa-video-camera"></i></span>
            </a>
            <a class="navbar-item">
            <span>New Law and Government Policies</span>
            <span><i class="fas fa-book"></i></span>
            </a>
            <a class="navbar-item">Career</a>
            <a class="navbar-item">Report an issue</a>
        </div>
        </div>
      <!-- another drop down -->
      <div class="navbar-item has-dropdown is-hoverable">
          
        
      </div>
      <a class="navbar-item">
          <select class="select" onchange="changeLanguageByButtonClick()" id="google_translate_element">
            <option class="option" value="en">English</option>
            <option class="option" value="hi">Hindi</option>
          </select>
        </a>
    </div>

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
  </div>
</nav>