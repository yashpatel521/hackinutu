<?php
require_once("include/header.php");

?>




<nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                   
                                </div>
                            </li>
                            <span class="d-none d-lg-inline my-auto text-dark-600 text-capitalize">
                                            <?php echo $juryLoggedIn;?>
                                        </span>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            
                            <li class="nav-item dropdown no-arrow" role="presentation">
                            
                                <div class="nav-item dropdown no-arrow">
                                
                                    <a class="dropdown-toggle nav-link"  href="logout.php">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-dark"></i><span class="text-dark">Logout</span>
                                    </a>
                                   
                                    <!-- <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                        <a class="dropdown-item" role="presentation" href="logout.php">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                                    </div> -->
                            </li>
                        </ul>
                    </div>
                </nav> 