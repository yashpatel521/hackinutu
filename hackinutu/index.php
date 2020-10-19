<?php
require_once("include/header.php");

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.21/datatables.min.css"/>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.21/datatables.min.js"></script>

</head>
<body id="page-top">
    <div id="wrapper">
        <?php require_once("include/sidebar.php");?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php require_once("include/topbar.php");?>

                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Final evaluation</h3>
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="row">
                                <div class="col">
                                
                                    <div class="card shadow mb-3">
                                    <div class="card-header  py-3" style="background-color: #000031;">
                                            <p class="text-white m-0 font-weight-bold">Final Round</p>
                                        </div>
                                        <div class="container-fluid">
                                            <div class="card-body">

                                                </div>
                                                <div class="table-responsive table mt-2" >
                                                    <table class="table  table-striped table-hover  my-0" >
                                                        <thead >
                                                            <tr class="table-active bg-warning text-white">
                                                                <th>Sr&nbsp;No.</th>
                                                                <th>Team id</th>
                                                                <th  style="width:10%">Team name</th>
                                                                <th>Implementation</th>
                                                                <th>Level of innovation</th>
                                                                <th>Feasibility</th>
                                                                <th>Market Adaptibility</th>
                                                                <th >Comment</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $query = $con->prepare("SELECT * FROM final_round WHERE jury_id = $juryId");
                                                                $query->execute();
                                                                $c=0;
                                                                if ($query->rowCount() != 0) {
                                                                    while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                                                        $c++;
                                                                        $id = $row["team_id"];
                                                                        $comment = $row["comment"];
                                                                        $team_query = $con->prepare("SELECT * FROM team WHERE team_id = '$id' ");
                                                                        $team_query->execute();
                                                                        $team_row = $team_query->fetch(PDO::FETCH_ASSOC);
                                                                        $team_name = $team_row["team_name"];
                                                                        
                                                                     echo   "<tr class='text-center' ><td>".$c.
                                                                        "</td><td>".$id.
                                                                        "</td><td class='text-left'>".$team_name.
                                                                       
                                                                        "</td><td>".$row['imple'].
                                                                        "</td><td>".$row['inno'].
                                                                        "</td><td>".$row['feas'].
                                                                        "</td><td>".$row['market'].
                                                                        "</td><td class='text-left'>".$comment.
                                                                        "</td><td>".$row['total'].
                                                                        "</td>"."<tr>";
                                                                    }
                                                                    echo "</table>";
                                                                    }
                                                                    else {
                                                                        echo "<tr><td colspan='9' class='text-center'>No record Found  </td></tr>";
                                                                    }
                                                            ?>
                                                        </tbody>
                                                    </table>

                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php require_once("include/footer.php"); ?>

        </div>
    </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>


    <script type="text/javascript">
    $(document).ready(function(){
    $('table').DataTable({
        ordering:false
    });
    });
</script>
     <!-- <script src="assets/js/jquery.min.js"></script> -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>

</body>

</html>
