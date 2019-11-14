<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="people.php">Add Person</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="peoplelist.php">List of People</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>

      <?php if( !isset($_SESSION['user_id'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="register.php">SignUp</a>
        </li>
      <?php endif; ?>

      <li class="nav-item">
        <?php if( !isset($_SESSION['user_id'])): ?>
          <a class="nav-link" href="login.php">Login</a>
        <?php else: ?>
          <a class="nav-link" href="logout.php">Logout</a>
        <?php endif; ?>
      </li>

    </ul>
  </div>
</nav>