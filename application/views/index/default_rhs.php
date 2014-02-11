	

<div id="smalliFrame" style="background:#800000; border:1px solid #aaa;border-radius:5px; padding:40px;">
 <a href="javascript:showSearchDiv('smalliFrame','bigiFrame')"><b>Big iFrame</b></a>
 <h4 style="color:#fff">BOOK A TABLE</h4>
  <form class="form-horizontal" role="form" method="POST" action="/dinerdetails" >
	<div class="form-group">
		<select  class="form-control">
	 		<option>Select Restaurant</option>
  			<option>chola</option>
  			<option>As Restaurant</option>
		</select>
	</div>
	
	<div class="form-group">
		<input type="date" id="date" class="form-control" placeholder="">
	</div>
	
	<div class="form-group">
		<input type="time" class="form-control" placeholder="Text input">
	</div>
	<div class="form-group">
		<select  class="form-control">
			<option>Select Persons</option>
 			<option>1Person</option>
 			<option>2People</option>
			<option>3People</option>
 			<option>4People</option>
 			<option>5People</option>
 			<option>6People</option>
 			<option>7People</option>
 			<option>8People</option>
 			<option>9People</option>
 			<option>10People</option>
 			<option>11People</option>
 			<option>12People</option>
		</select>
	</div>
	
	<button type="submit" class="btn btn-info btn-sm pull-right">
  		<span class="glyphicon glyphicon-chevron-right"></span>
	</button>
	
  </form>
	
</div>	

<div id="bigiFrame"style="background:#800000; border:1px solid #aaa;border-radius:5px; padding:40px; display:none">
 <a href="javascript:showSearchDiv('bigiFrame','smalliFrame')"><b>Small iFrame</b></a>	
  <h4 style="color:#fff">BOOK A TABLE</h4>
  
   <form class="form-horizontal" role="form" method="POST" action="/bookingconfirm">
	<div class="form-group">
		<select  class="form-control">
	 		<option>Select Restaurant</option>
  			<option>chola</option>
  			<option>As Restaurant</option>
		</select>
	</div>
	
	<div class="form-group">
		<input type="date" id="date" class="form-control" placeholder="">
	</div>
	
	<div class="form-group">
		<input type="time" class="form-control" placeholder="Text input">
	</div>
	<div class="form-group">
		<select  class="form-control">
			<option>Select Persons</option>
 			<option>1Person</option>
 			<option>2People</option>
 			<option>3People</option>
 			<option>4People</option>
 			<option>5People</option>
 			<option>6People</option>
 			<option>7People</option>
 			<option>8People</option>
			<option>9People</option>
 			<option>10People</option>
 			<option>11People</option>
 			<option>12People</option>
		</select>
	</div>

<div class="form-group">
  <!--   <label for="inputEmail3" class="col-sm-2 control-label">First Name</label> -->
    <div class="">
      <input type="text" class="form-control" id="fname" name="firstname" placeholder="First Name">
    </div>
  </div>
  
  <div class="form-group">
    <div class="">
      <input type="text" class="form-control" id="inputEmail3" name="lastname" placeholder="Last Name">
    </div>
  </div>
  
  <div class="form-group">
    <div class="">
      <input type="phone" class="form-control" id="mobile" name="mobile" placeholder="Mobile No">
    </div>
  </div>
  
  <div class="form-group">
    <div class="">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
  </div>
  
	<div class="checkbox" style="color:#fff;">
        <label>
          <input type="checkbox" checked> Notify booking confirmation via SMS
        </label>
      </div>
      
      <div class="checkbox" style="color:#fff;">
        <label>
          <input type="checkbox"> To continue please confirm you have read and accepted all our <a href="#">term and condition</a>
        </label>
      </div>
      
      <button type="submit" class="btn btn-info btn-sm pull-right">
  		<span class="glyphicon glyphicon-chevron-right"></span>
	 </button>
  </form>
	
</div>	


<script>
function showSearchDiv(hide,show) {
	document.getElementById(hide).style.display = 'none';
	document.getElementById(show).style.display = 'block';
	document.getElementById(hide+"div").style.display = 'none';
	document.getElementById(show+"div").style.display = 'block';
}

date = new Date();
var month = date.getMonth()+1;
var day = date.getDate();
var year = date.getFullYear();
if (document.getElementById('date').value == ''){
document.getElementById('date').value = day + '-' + month + '-' + year;
}

</script>