 <div class="col-xs-12 text-center">          
     <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert">x</button>
           you must be logged in as an dashboard user.
     </div>
 </div> 
 <div class="clearfix"></div>
 
  <div class="col-sm-6 col-sm-offset-3">
   	  <div id="login-header" class="col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-3 text-center">
        <span class="glyphicon glyphicon-user"></span><br>
          <span class="glyphicon-class"><strong>Administrator</strong></span>
      </div> 
 </div> 
 <div class="clearfix"></div>
 
<div class="well col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 form-control-spacing">
   <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form method="POST" action="/dashboard/dashboardhome" class="form-signin">
                <p class="text-center" id="reg_lists">Enter your username and password</p>
                <input type="text" placeholder="Username" class="form-control" name="username">
                <input type="password" placeholder="Password" class="form-control" name="password">
                <label class="checkbox">
                	<input type="checkbox" name="save" value="remember">Remember me?
                </label>
                <input type="submit" class="btn btn-md btn-info col-xs-offset-4 col-sm-offset-5" type="submit" value="Sign in"/>
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            <form  method="POST" action="/dashboard" class="form-signin">
                <p class="text-center" id="reg_lists">Enter your valid e-mail</p>
                <input type="email" placeholder="mail@domain.com" class="form-control" name="mailid">
                <br/>
                <button class="btn btn-lg btn-info col-xs-offset-3 col-sm-offset-4 disabled" type="submit">Recover Password</button>
            </form>
        </div>
        <div id="signup" class="tab-pane">
            <form  method="POST" action="/dashboard" class="form-signin">
                <p class="text-center" id="reg_lists">To sign up, please enter your details.</p>            
                <input type="text" placeholder="username" class="form-control" name="username">
                <input type="email" placeholder="mail@domain.com" class="form-control" name="emailid">
                <input type="password" placeholder="password" class="form-control" name="password"><br/>
                <button class="btn btn-lg btn-info col-xs-offset-4 col-sm-offset-5 disabled" type="submit">Register</button>
            </form>
        </div>
    </div>
    <div class="text-center form-control-spacing" id="reg_lists">
        <ul class="list-inline">
            <li><a  href="#login" data-toggle="tab">Login</a></li>
            <li><a  href="#forgot" data-toggle="tab">Forgot Password</a></li>
            <li><a  href="#signup" data-toggle="tab">Signup</a></li>
        </ul>
    </div>
 </div>  <!-- /.well -->
