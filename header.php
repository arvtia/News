<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <!-- <link rel="stylesheet" href="assets/stylesheet/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
    <link rel="stylesheet" href="assests/stylesheet/style.css">

</head>
<body>

<!-- navbar- -->

<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
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
      <a class="navbar-item">
        Home
      </a>

      <a class="navbar-item">
        Live News
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          International News
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Career
          </a>
          
          <a class="navbar-item">
            Report an issue
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
            <div class="field has-addons">
                <div class="control">
                    <input class="input is-small" type="text" placeholder="Find what you looking for">
                </div>
                <div class="control">
                    <button class="button is-small">
                    Search
                    </button>
                </div>
            </div>
      </div>
    </div>
  </div>
</nav>