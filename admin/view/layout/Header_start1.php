<div class="header">
  <div class="header-content clearfix">

    <div class="nav-control">
      <div class="hamburger">
        <span class="toggle-icon"><i class="icon-menu"></i></span>
      </div>
    </div>
    <div class="header-left">
      <div class="input-group icons">
        <div class="input-group-prepend">
          <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
        </div>
        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
        <div class="drop-down animated flipInX d-md-none">
          <form action="#">
            <input type="text" class="form-control" placeholder="Search">
          </form>
        </div>
      </div>
    </div>

    <div class="header-right">
      <ul class="clearfix">
        <li class="icons dropdown">
          <div>
            <a href="usercreatepage.php" type="button" class="btn btn-primary" style="margin:30px" class="fa fa-plus"><i class="fa fa-plus">&ensp;New User</i></a>
          </div>
        </li>
        <li class="icons dropdown">
          <div class="user-img c-pointer position-relative" data-toggle="dropdown">
            <span class="activity active"></span>
            <img src="images/user/1.png" height="40" width="40" alt="">
          </div>
          <?php
          session_start();
          if (isset($_SESSION["isLogin"])) {
            echo '<div class="drop-down dropdown-profile animated fadeIn dropdown-menu">';
            echo '<div class="dropdown-content-body"> ';
            echo '<ul>';
            echo '<li>';
            echo '<a href="app-profile.html"><i class="icon-user"></i> <span>' . $_SESSION["user_email"] . '</span></a> ';
            echo '</li>';
            echo '<li><a href="logoutpage.php"><i class="icon-key"></i> <span>Logout</span></a></li>';
            echo '</ul>';
            echo '</div>';
            echo '</div>';
          } else {
            echo '<div class="drop-down dropdown-profile animated fadeIn dropdown-menu">';
            echo '<div class="dropdown-content-body"> ';
            echo '<ul>';
            echo '<li><a href="login.php"><i class="icon-key"></i> <span>Sign Up</span></a></li>';
            echo '</ul>';
            echo '</div>';
            echo '</div>';
          }
          ?>
        </li>
      </ul>
    </div>
  </div>
</div>