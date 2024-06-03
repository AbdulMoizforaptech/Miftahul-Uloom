<?php
if(isset($_SESSION['status'])) {
?>
  <div class="container">
  <div class="col-md-9">
  <div class="alert alert-warning alert-dismissible fade show" style="font-family: Jameel Noori Nastaleeq; font-size: 20px" role="alert">
        <?php echo $_SESSION['status'];?>
    </div>
  </div>
  </div>
  
<?php
    unset($_SESSION['status']);
}
?>
