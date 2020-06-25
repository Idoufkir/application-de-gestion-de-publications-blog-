<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="Home.php">Blog</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sample Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <?php
          session_start();
          if (isset($_SESSION["user"])) {

           ?>
            <ul class="navbar-nav ml-auto">
              
                <li class="nav-item"><a class="nav-link" href="User.php">Users</a></li>
                <li class="nav-item"><a class="nav-link" href="Post.php">Posts</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Log out</a></li>
            </ul>
        <?php } ?>
        </ul>
      </div>
    </div>
  </nav>

