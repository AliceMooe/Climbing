<?php
session_start();
include('../adminheader.php');
if(isset($_SESSION['attempt_again'])){
  $now = time();
  if($now >= $_SESSION['attempt_again']){
    unset($_SESSION['attempt']);
    unset($_SESSION['attempt_again']);
    unset($_SESSION['msg']);
  }
}
?>
<div class="container py-5">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <?php
        if(isset($_SESSION['msg']))
        {
      ?>
      <div class="alert alert-danger">
          <?php 
            echo $_SESSION['msg'];
          ?>
      </div>
      <?php
        }
      ?>
      
      <form action="login-success.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <?php
        if(isset($_SESSION['check']) == 1)
        {
        ?>
          <a href="../logout.php" class="btn btn-success">Reset</a>
        <?php
        }
        ?>
      </form>
    </div>
  </div>
</div>
<?php
include('../footer.php');
?>