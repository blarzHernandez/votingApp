<form class="form-horizontal">
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
      <label class="col-lg-2 control-label">Radios</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
            Option one is this
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something else
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Selects</label>
      <div class="col-lg-10">
        <select class="form-control" id="select">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <br>
        <select multiple="" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
