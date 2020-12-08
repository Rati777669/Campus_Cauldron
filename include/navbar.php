<ul class="navbar-nav mr-auto">
  <li class="nav-item">
    <a class="nav-link" href="index.php">Home</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Explore
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="index.php#after-intro">Notices</a>
      <a class="dropdown-item" href="index.php#after-notice">Gallery</a>
      <a class="dropdown-item" href="index.php#after-gallery">Clubs and Cells</a>
      <a class="dropdown-item" href="index.php#after-clubs">Events and Fests</a>
      <a class="dropdown-item" href="index.php#after-fests">FAQs</a>
      <a class="dropdown-item" href="index.php#after-questions">College Map</a>

    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">About</a>
  </li>
  <li class="nav-item">    
  <?php
      if (!isset($_SESSION['email'])) {
      ?> <a class="nav-link" href="sign-in.php">Sign-in to Ask</a>          
      <?php } else {        
      ?> <a class="nav-link" href="ask.php">Ask Questions</a>      
      <?php
      }
      ?>
  </li>
  <li class="nav-item">
        <a class="nav-link" href="suggested_questions.php">Questions asked</a>
      </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contact Us</a>
  </li>
</ul>