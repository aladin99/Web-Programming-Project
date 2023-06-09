<?php session_start(); ?>

<style>
  <?php include 'Navbar.css'; ?>
</style>

<nav class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      <img  style="width:70px;height:70px; margin-left: 3%; " src="/WebProgramiranje\Assets\logo.png" alt="Logo" />
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <ul class="nav-list">
  <li><a href="https://e-coooking.000webhostapp.com/WebProgramiranje/index.php">Početna</a></li>
      <?php

      if (isset($_SESSION["UserName"]) == true) {
        
        if($_SESSION["tip"]=="predavac"){
          echo "<li><a href='/WebProgramiranje/Pages/Courses/CreateCourses/MyCourses.php' class='menu__link r-link text-underlined'>Moji kursevi</a></li>";
          echo "<li><a href='/WebProgramiranje/Pages/Courses/OnCourse.php' class='menu__link r-link text-underlined'>Uvid</a></li>";
          echo "<li><a href='/WebProgramiranje/Pages/Courses/CreateCourses/CreateCourse.php' class='menu__link r-link text-underlined'>Kreiraj kurs</a></li>";

        }
        if($_SESSION["tip"]=="korisnik"){
          echo "<li><a href='/WebProgramiranje/Pages/Courses/CreateCourses/Learning.php' class='menu__link r-link text-underlined'>Učenje</a></li>";
          echo "<li><a href='/WebProgramiranje/Pages/User/History.php' class='menu__link r-link text-underlined'>Istorija</a></li>";
        }
        echo ' <li><a href="/WebProgramiranje/Pages/Courses/Course.php" class="menu__link r-link text-underlined">Kursevi</a></li>';
        echo ' <li><a href="/WebProgramiranje/Pages/User/UserProfile.php" class="menu__link r-link text-underlined">Profil</a></li>';
        echo "<li><a href='/WebProgramiranje/Components/Navbar/Logout.php' class='menu__link r-link text-underlined'>Odjavi se</a></li>";
        
      } else{
        echo "<li><a href='/WebProgramiranje/./Components/Registration/Register.php' class='menu__link r-link text-underlined'>Registracija</a></li>";
        echo "<li><a href='/WebProgramiranje\Components\SignIn\LoginForm.php' class='menu__link r-link text-underlined'>Logovanje</a></li>";}
      ?>
  </ul>
</nav>

      
   
      </div>
    </ul>
  </nav>
</div> 