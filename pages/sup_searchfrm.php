<?php
include'../includes/connection.php';

include'../includes/sidebar.php';
  $query = 'SELECT ID, t.TYPE
            FROM users u
            JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].''; 
  $result = mysqli_query($db, $query) or die (mysqli_error($db));
  
  while ($row = mysqli_fetch_assoc($result)) {
            $Aa = $row['TYPE'];
                   	
  if ($Aa=='User'){
?>
  <script type="text/javascript">
    //then it will be redirected
    alert("Page restreinte ! Vous serez redirigé vers POS");
    window.location = "pos.php";
  </script>
<?php
  }           
}
?>
          <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Détails du fournisseur</h4>
            </div>
            <a href="supplier.php?action=add" type="button" class="btn btn-primary bg-gradient-primary">Retour</a>
            <div class="card-body">
          <?php 
            $query = 'SELECT SUPPLIER_ID, COMPANY_NAME, l.PROVINCE, l.CITY, PHONE_NUMBER FROM supplier e join location l on e.LOCATION_ID = l.LOCATION_ID WHERE e.SUPPLIER_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['SUPPLIER_ID'];
                $a= $row['COMPANY_NAME'];
                $b=$row['PROVINCE'];
                $c=$row['CITY'];
                $d=$row['PHONE_NUMBER'];
              }
              $id = $_GET['id'];
          ?>
                
                    <div class="form-group row text-left">
                      <div class="col-sm-
