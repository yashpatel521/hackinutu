<?php
require_once("include/header.php");

if(isset($_GET['id'])){
    $teamId=$_GET['id'];
    $query = $con->prepare("SELECT * FROM team where team_id = '$teamId' ");
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $teamname = $row['team_name'];
    $psid = $row['ps_id'];
}

 if(isset($_POST['round4'])){
   
    $imple = $_POST['Implementation'];
    $inno = $_POST['innovation'];
    $feas = $_POST['Feasibility'];
    $market = $_POST['Adaptibility'];
    $comment = $_POST['comment'];
    $total = $imple + $inno + $feas + $market;
    if($imple != null && $inno != null && $feas != null && $market != null ){
     $query = $con->prepare("INSERT into final_round (team_id,jury_id,imple,inno,feas,market,comment,total)
      VALUES ('$teamId' , '$juryId','$imple','$inno','$feas','$market','$comment','$total')");
     $query->execute();
     echo "<script>window.alert('Inserted Sucessfully for final round')</script>";
    }
    else{
        echo "<script>window.alert('Please Insert all value ')</script>";
    }
 }
?>


<!DOCTYPE html>
<html>
<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

input[type=number] {
  -moz-appearance: textfield;
}
</style>
<body id="page-top">
    <div id="wrapper">
        <?php require_once("include/sidebar.php");?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php require_once("include/topbar.php");?>

                <div class="container-fluid">
                    <h3 class="text-dark mb-4"><?php echo "Team id: ".$teamId ."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" ."Team name: ". $teamname ."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". "Problem Id: ".$psid ?></h3>
                  
                    <div class="row mb-3">
                       
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                    <div class="card-header  py-3" style="background-color: #000031;">
                                                                                <p class="text-white m-0 font-weight-bold">Final Round</p>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" >
                                                    <div class="form-row">
                                                           
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label ><strong>Implementation (0 to 50): </strong>
                                                                    </label>
                                                                    <input type="number" class="form-control" name="Implementation"  placeholder="Enter evalution for Implementation (0 to 50)" min="0" max="50"   required>
                                                                </div> 
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label ><strong>Level of innovation (0 to 25):</strong>
                                                                    </label>
                                                                    <input type="number" class="form-control" name="innovation"  placeholder="Enter evalution for innovation (0 to 25)" min="0" max="25"   required>
                                                                </div> 
                                                            </div>
                                                    </div>
                                                  
                                                    <div class="form-row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label ><strong>Feasibility (0 to 15):</strong>
                                                                    </label>
                                                                    <input type="number" class="form-control" name="Feasibility"  placeholder="Enter evalution for Feasibility (0 to 15)" min="0" max="15"   required>
                                                                </div> 
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label ><strong>Market Adaptibility (0 to 10):</strong>
                                                                    </label>
                                                                    <input type="number" class="form-control" name="Adaptibility"  placeholder="Enter evalution for Adaptibility (0 to 10)" min="0" max="10"   required>
                                                                </div> 
                                                            </div>
                                                    </div>
                                                    <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label ><strong>Enter Comment(optional) </strong>
                                                            </label>
                                                            <textarea name="comment" class="form-control" rows="2" ></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="form-group"><button class="btn btn-warning btn-sm" name="round4" type="submit">Submit</button></div>
                                            </form>
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
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
