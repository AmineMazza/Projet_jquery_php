<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Morocco Travel Admin</title>
    <link rel="shortcut icon" href="image/iconVg.png" type="image/x-icon">

    
    <link rel="stylesheet" href="css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <!--Side bar menu-->
  <div class="sidebar">
    <!--logo & name-->
    <div class="logo-details">
    <i class='bx bx-paper-plane'></i>
      <span class="logo_name">Morocco Travel</span>
    </div>
    <!--features menu-->
    <ul class="nav-links">
      <li>
        <a href="index.php" class="active">
          <i class='bx bx-grid-alt' ></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="Voyage_Organiser.php">
          <i class='bx bx-trip' ></i>
          <span class="links_name">Voyage Organiser</span>
        </a>
      </li>
      <li>
        <a href="Voyage_Personnaliser.html">
          <i class='bx bx-customize' ></i>
          <span class="links_name">Voyage Personaliser</span>
        </a>
      </li>
      <li>
        <a href="Reservation.php">
          <i class='bx bx-bookmark' ></i>
          <span class="links_name">Réservation</span>
        </a>
      </li>
      <li>
        <a href="Restaurant.php">
          <i class='bx bx-restaurant' ></i>
          <span class="links_name">Restaurant</span>
        </a>
      </li>
      <li>
        <a href="Hotel.php">
          <i class='bx bx-hotel' ></i>
          <span class="links_name">Hôtel</span>
        </a>
      </li>
      <li>
        <a href="Ville.php">
          <i class='bx bx-navigation'></i>
          <span class="links_name">Ville</span>
        </a>
      </li>
      <li>
        <a href="Endroit.php">
          <i class='bx bx-arch'></i>
          <span class="links_name">Endroit</span>
        </a>
      </li>
      <li>
        <a href="Clients_Reviews.html">
          <i class='bx bx-message' ></i>
          <span class="links_name">Clients & Reviews</span>
        </a>
      </li>
      <li>
        <a href="Statistique.html">
          <i class='bx bx-analyse' ></i>
          <span class="links_name">Statistique</span>
        </a>
      </li>
      
    </ul>
  </div>
  <!--home side-->
  <section class="home-section">
    <!--navigation bar-->
    <nav>
      <!--icon & page name-->
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Voyage Organiser</span>
      </div>
      <!--search bar-->
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <!--profile information-->
      <div class="profile-details">
      <img src="image/user2.png" alt="profile image">
        <span class="admin_name">Admin</span>
        <div class="toggle_btn">
          <i class='bx bx-chevron-down' ></i>
        </div>
      </div>
      <!--Drop down menu-->
      <div class="profile-details-dropdown">
          <li>
              <a href="#">
                <i class='bx bx-user' ></i>
                <span class="links_name">Edit Profile</span>
              </a>
            </li>
          <li>
            <a href="#">
              <i class='bx bx-slider' ></i>
              <span class="links_name">Setting</span>
            </a>
          </li>
        <li>
          <a href="#">
            <i class='bx bx-exit' ></i>
            <span class="links_name">Log Out</span>
          </a>
        </li>
        </div>
    </nav>
    <!--body content-->
    <div class="home-content">
      <!--statistique box-->
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Nos Voyages</div>
            <div class="number">3</div>
           
          </div>
          <i class='bx bx-trip cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Nos Clients</div>
            <div class="number">50</div>
            
          </div>
          <i class='bx bxs-user cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Réservation</div>
            <div class="number">10</div>
           
          </div>
          <i class='bx bx-bookmark cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Destination</div>
            <div class="number">3</div>
           
          </div>
          <i class='bx bxs-navigation cart four' ></i>
        </div>
      </div>
      <!--features information-->

      <div class="feature-display">
        <div class="leading">
          <div class="title">Voyages</div>
          <div class="add-btn">
            <button><a href="Add_Voyage.html">Ajouter</a></button>
          </div>
        </div>
        
        
        <div class="features-list">
<?php
     
    require 'database.php';
    
       $requete="SELECT * FROM voyage";
       $query=mysqli_query($con,$requete);
       while($rows=mysqli_fetch_assoc($query)){
        // <img src="image/profile.jpg">
        echo'
          <!--features one-->
          <div class="feature-one">
          <img src="image/' . $rows['image'] . '">
           
            <div class="feature-details">
              <h4>'. $rows["prix"] .' Dh</h4>
              <h2>'. $rows["destination"] .'</h2>
              <div class="voyage-time">
                <i class="bx bx-calendar"></i>
                <span class="text">Départ : '. $rows["DateDepart"] .'</span>
              </div>
              <p>'. $rows["Description"] .'</p>
              <div class="rud-btn">
                <div class="edit-btn">
                  <a href="#"><i class="bx bx-edit"></i></a>
                  
                </div>
                <div class="edit-btn">
                  <a href="#"><i class="bx bx-show"></i></a>
                </div>
                <div class="edit-btn" >
                       <a href="delete.php?id='. $rows["id"] .'"><i class="bx bx-minus" style="font-size: 20px; font-weight: bold;"></i></a>
                    </div>
            </div>
          </div>
        </div>';

      }
        echo '</div>
  </section>'
?>
<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if(sidebar.classList.contains("active")){
      sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
      sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }

          const toggleBtn = document.querySelector('.toggle_btn')
          const toggleBtnIcon = document.querySelector('.toggle_btn i')
          const DropDownMenu = document.querySelector('.profile-details-dropdown')

          toggleBtn.onclick = function(){
            DropDownMenu.classList.toggle('open')
          }
    
 </script>

</body>
</html>

