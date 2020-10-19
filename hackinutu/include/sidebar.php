<?php require_once("include/header.php");?>

<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion  p-0"
style="background-color: #000031;">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.php">
                    <div class="sidebar-brand-icon "><img src="https://hackinutu.com/utulogo.png" height=60px></div>
                    <div class="sidebar-brand-text mx-3"><span>HackinUtu</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                <li class='nav-item' role='presentation'><a class='nav-link active' href='index.php'>
                        <i class='fas '></i><h3>Select Team</h1></a></li>
                        
                <?php
                
                 $query = $con->prepare("SELECT * FROM team where jury_id = $juryId");
                 $query->execute();
                 if ($query->rowCount() != 0) {
                    while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                        $team_id = $row['team_id'];
                        $team_name = $row['team_name'];
                        echo "<li class='nav-item' role='presentation'><a class='nav-link active' href='evalution.php?id=$team_id'>
                        <i class='fas fa-user'></i><span> $team_id</span></a></li>";
                    }
                }

                ?>
                   <li class='nav-item' role='presentation'><a class='nav-link active' href='index.php'>
                        <i class='fas fa-book'></i><span> Your Evalution</span></a></li>
                    </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
