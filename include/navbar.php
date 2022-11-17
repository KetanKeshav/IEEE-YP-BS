<nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
        <li><a class="nav-link scrollto <?php if ($active == "home" ) echo "active"?>" href="index.php">Home</a></li>
        <li class="dropdown"><a href="#"><span>Events</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">IEEE YPSIC</a></li>
                <li><a href="#">IEEE B-HTC 2020</a></li>
                <li><a href="#">YP GLOBAL SUMMIT</a></li>
            </ul>
        </li>
        <li><a class="nav-link scrollto" href="#">Achievements</a></li>
        <li><a class="nav-link scrollto" href="#">Activities</a></li>
        <li class="dropdown"><a href="execom.php" class="<?php if ($active == "execom" || $active == "past-execom") echo "active"?>" ><span>Execom</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="past-execom.php" class="nav-link<?php if ($active == "past-execom" ) echo "active"?>">Past Execoms</a></li>
            </ul>
        </li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
<!-- .navbar -->