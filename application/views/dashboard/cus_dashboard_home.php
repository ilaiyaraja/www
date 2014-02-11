

<ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#manage-restaurant" data-toggle="tab">Manage Restaurant</a></li>
  <li><a href="#manage-site" data-toggle="tab">Manage Site</a></li>
  <li><a href="#manage-tables" data-toggle="tab">Manage Tables</a></li>
  <li><a href="#manage-payments" data-toggle="tab">Manage Payments</a></li>
  <li><a href="#manage-booking" data-toggle="tab">Manage Booking</a></li>
  <li><a href="#manage-admin-profile" data-toggle="tab">Manage Admin Profile</a></li>
</ul>


<div class="tab-content">
  <div class="tab-pane fade active in" id="manage-restaurant">
  
  <div style="background:#ddd; padding:5px; margin-top:10px">
RESTAURANT DETAILS 
<button type="submit" class="btn btn-default">VIEW</button>
<button type="submit" class="btn btn-default">MODIFY</button>
<button type="submit" class="btn btn-default">CANCEL</button>

<button type="submit" class="btn btn-success pull-right">STATUS - DEMO MODE</button>
</div>

 <div class="col-sm-6">
<p> All the fields with * are mandatory</p>
  
  <form class="form-horizontal" role="form" action="/" method="POST">
  <div class="form-group">
    <label for="restaurantname" class="col-sm-2 control-label">RESTAURANT NAME</label>
   
    <div class="col-sm-10">
      <input type="restaurantname" class="form-control" id="restaurantname" placeholder="">
    </div>
  </div>
  
  <div class="form-group">
   <label for="inputPassword3" class="col-sm-2 control-label">TERMS AND CONDITIONS * </label>
   
    <label>
    <input type="checkbox" value="">
    TERMS & CONDITIONS LINK URL
  </label>
  
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
    
    <label>
    <input type="checkbox" value="">
    TERMS & CONDITIONS TEXT
  </label>
  <textarea class="form-control" rows="3"></textarea>
    
  </div>
  <div class="form-group">
   LOGO 
   <img alt="logo" src="/images/logo.gif" height="50" width="100">
   
   
   <div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-success btn-file">
								Browse&hellip; <input type="file" name = "" id="">
							</span>  
						</span>
						<input type="text" class="form-control" readonly>
	</div>
	<p class="help-block">Accepted formats are png, jpg and bmp only.</p>   

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Enable SMS Booking Confirmation for Diners
        </label>
      </div>
    </div>
  </div>
  
  </div>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-12">
      <button type="submit" class="btn btn-default">NEXT</button>
    </div>
  </div>

  </div>
  
  <div class="col-sm-6">
  
  <dl class="dl-horizontal">
  <dt>RESTAURANT ID</dt>
  <dd>RES0001</dd>
   <dt>PREVIOUS BILLING DATE</dt>
  <dd>Service not yet to started</dd>
   <dt>NEXT BILLING DATE</dt>
  <dd>Service not yet to started</dd>
</dl>

<label class="btn btn-default">SITE THEME</label><br/><br/>


<div class="form-group">
    <label for="restaurantname" class="col-sm-3 control-label">FRAME SIZE</label>
   
    <div class="col-sm-9">
    <select class="form-control">
  <option>1</option>
  <option>2</option>
  
</select>
    </div>
    
    </div>
    
    <div class="clearfix"></div>

    <div class="form-group">
    <label for="restaurantname" class="col-sm-3 control-label">BACKGROUND COLOR</label>
   
    <div class="col-sm-9">
      <input type="restaurantname" class="form-control" id="restaurantname" placeholder="#DDDDDD">
    </div>
  </div>
     <div class="clearfix"></div>
  <div class="form-group">
    <label for="restaurantname" class="col-sm-3 control-label">FOREGROUND COLOR</label>
   
    <div class="col-sm-9">
      <input type="restaurantname" class="form-control" id="restaurantname" placeholder="#000000">
    </div>
  </div>
     <div class="clearfix"></div>
     
  
  <div class="form-group">
    <label for="restaurantname" class="col-sm-3 control-label">FONT FAMILY</label>
   
    <div class="col-sm-9">
      <input type="restaurantname" class="form-control" id="restaurantname" placeholder="Arial">
    </div>
  </div>
     <div class="clearfix"></div>
  <div class="form-group">
    <label for="restaurantname" class="col-sm-3 control-label">FONT SIZE</label>
   
    <div class="col-sm-9">
      <input type="restaurantname" class="form-control" id="restaurantname" placeholder="13">
    </div>
  </div>
    
    
  </div>
  



</form>
  

  
  <div class="tab-pane fade " id="manage-site">
 manage site
  
  
  </div>
  <div class="tab-pane fade " id="manage-tables">
 manage tables
  
  </div>
  <div class="tab-pane fade " id="manage-payments">
  manage payments
  
  </div>
  
  <div class="tab-pane fade " id="manage-booking">
  manage booking
  
  </div>
  
  <div class="tab-pane fade " id="manage-admin-profile">
  manage admin profile
  
  </div>
   
</div>

  
<script>


/*  Choose file button script */
$(document)
	.on('change', '.btn-file :file', function() {
		var input = $(this),
		numFiles = input.get(0).files ? input.get(0).files.length : 1,
		label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
 		input.trigger('fileselect', [numFiles, label]);
}); 

$(document).ready( function() {
	$('.btn-file :file').on('fileselect', function(event, numFiles, label) {
		
		var input = $(this).parents('.input-group').find(':text'),
			log = numFiles > 1 ? numFiles + ' files selected' : label;
		
		if( input.length ) 
			input.val(log); 

	});
});	

$('#myTab a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});
</script>