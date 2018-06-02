<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <div class="logo-lg d-none d-md-block">
            <a href="https://www.thescrubberyzone.com"><img src="/img/logo1.png" alt="Logo" class="img-fluid"></a>		
        </div>	
        <!-- Small logo for mobile-->
        <div class="logo-sm d-sm-block d-md-none mx-auto">
            <a href="https://www.thescrubberyzone.com"><img src="/img/logo1small.png" alt="Logo" class="img-fluid"></a>		
        </div>			
        <div class="navbar-header"> 
          <!-- Button that toggles the navbar on and off on small screens -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>		
        </div>
  
    <!-- Nav links that go inside the collapsable menu when small screen or outside as normal links when not-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/about">About Me</a></li>
                <li class="nav-item"><a href="/contact">Contact</a></li>
                <?php
                //If I am logged in it will show a link to the admin zone
                if(isset($_SESSION['sessionFirstname']) && isset($_SESSION['sessionLastname']))
                {
                    echo "<li class=\"nav-item\"><a href=\"/admin\">Admin</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>