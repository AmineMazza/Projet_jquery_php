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
          <i class='bx bx-line-chart' ></i>
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
        <span class="dashboard">Dashboard</span>
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
      <div class="first-block">
        <div class="left-side-block" style="background-image: url('image/travel2.jpg');">
            <h2 >Hello Admin</h2>
            <!-- <p style="color: #000000;">Don't forget to check your reservation<br>And view your daily report</p> -->
            <h5>Have a nice day</h5>
            <button><a href="Statistique.html">Check Your Number</a></button>
        </div>
          
        </div>
        <div class="second-block">

        <div class="left-side">
          
          <div class="heading">
            <h2>Les réservation d'aujourd'hui</h2>
            <a href="Reservation.php">See More
              <i class='bx bx-right-arrow-alt cart'></i>
            </a>
          </div>
          <div class="reservation">
            <div class="voyage">
              <div class="voyage-image">
              <img src="image/iconVg.png" style="height: 70px; width: 70px;">
              </div>
              <div class="voyage-title" style="margin-right: 170px;">
              <h4>Toubkal tour</h4>
              <h6 style="font-size: 14px; color: black;">13DT64D4</h6>
              <div class="voyage-time">
                <i class='bx bx-calendar'></i>
                <span class="text">12/04/2023</span>
              </div>
              <div class="voyage-time">
                <i class='bx bxs-group' style="font-size: 20px;"></i>
                <span class="text">12</span>
              </div>
              </div>
              
              <a href="#">
                <i class='bx bx-grid-alt'></i>
              </a>
            </div>
          </div>
        </div>

        <div class="right-side">
          <div class="heading" style="display: flex; justify-content: space-between;">
            <h2>Clients Reviews</h2>
            <a href="Clients_Reviews.html">See More
              <i class='bx bx-right-arrow-alt cart'></i>
            </a>
          </div>
          <div class="voyage">
            <div class="voyage-image" >
            <img src="image/user.png" style="border-radius: 50px;">
            </div>
            <div class="voyage-title" style="margin-right: 150px;">
            <h4>salma sami</h4>
            <div style="margin-bottom: 4px;" class="voyage-time" >
              <i style="color: yellow;" class='bx bxs-star'></i>
              <i style="color: yellow;" class='bx bxs-star'></i>
              <i style="color: yellow;" class='bx bxs-star'></i>
              <i style="color: yellow;" class='bx bxs-star'></i>
              
            </div>
            </div>
            
            <a href="#">
              <i class='bx bx-right-arrow-alt'></i>
            </a>
          </div>
          <div class="voyage">
            <div class="voyage-image" >
            <img src="image/user.png" style="border-radius: 50px;">
            </div>
            <div class="voyage-title" style="margin-right: 150px;">
            <h4>Amine Belk</h4>
            <div style="margin-bottom: 4px;" class="voyage-time" >
              <i style="color: yellow;" class='bx bxs-star'></i>
              <i style="color: yellow;" class='bx bxs-star'></i>
              <i style="color: yellow;" class='bx bxs-star'></i>
              <i style="color: yellow;" class='bx bxs-star'></i>
              
            </div>
            </div>
            
            <a href="#">
              <i class='bx bx-right-arrow-alt'></i>
            </a>
          </div>
         

        </div>
        </div>
      </div>
        </div>
  </section>

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

