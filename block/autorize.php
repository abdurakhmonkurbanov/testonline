<form class="form-signin" method="post" action="<?php echo $_SERVER['PHP_SELF']  ?>">
  <div class="text-center mb-4">
    <img class="mb-4" src="images/icons.ico" alt="" width="150">
	  <h1 class="h3 mb-3 font-weight-normal">Tizimga kirish</h1>
  </div>

  <div class="form-label-group">
    <input type="login" id="inputEmail" name="login" class="form-control" placeholder="Login" required autofocus>
    <label for="inputEmail">Login</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Parol" required>
    <label for="inputPassword">Parol</label>
  </div>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Kirish</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - 2020</p>
	
</form>