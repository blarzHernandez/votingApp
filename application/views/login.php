<?php
        $atributos=array("id"=>"registerForm");
      echo form_open('home/login',$atributos);?>

  <fieldset>
    <legend>Login</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="username" placeholder="username">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Registrarme</button>
        <a class="btn btn-default" href="<?php echo base_url('home/login'); ?>" >Entrar!</a>
      </div>
    </div>
  </fieldset>
</form>
