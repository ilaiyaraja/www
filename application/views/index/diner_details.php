
<div class="panel panel-default form-control-spacing reference-panel" style="margin-top:50px;">
    <div class="panel-heading">
      <h4 class="panel-title">
          <b>complete your booking at CUSTOMER</b>
      </h4>
    </div>
<!-- Industry Table content -->
   <div class="panel-body">  
		<div id="bigiFrame"style=" border:0px solid #aaa;border-radius:5px; padding:50px;">
			<form class="form-horizontal" role="form" method= "POST" action="/bookingconfirm" style="border:0px solid red;">

			<div class="form-group col-sm-6">
					<select  class="form-control">
						<option>Select Restaurant</option>
						<option>chola</option>
						<option>As Restaurant</option>
					</select>
				</div>

		<div class="form-group col-sm-6">
			<input type="date" id="date" class="form-control" placeholder="">
		</div>

		<div class="form-group col-sm-6">
			<input type="time" class="form-control" placeholder="Text input">
		</div>
		
		<div class="form-group col-sm-6">
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
	<div class="clearfix"></div>
	<hr><br>
	<div class="form-group col-sm-6">
	<!--   <label for="inputEmail3" class="col-sm-2 control-label">First Name</label> -->
			<div class="">
				<input type="text" class="form-control" id="fname" name="firstname" placeholder="First Name">
    		</div>
    </div>

    <div class="form-group col-sm-6">
    		<div class="">
    			<input type="text" class="form-control" id="inputEmail3" name="lastname" placeholder="Last Name">
    		</div>
    </div>

    <div class="form-group col-sm-6">
    	<div class="">
    		<input type="phone" class="form-control" id="mobile" name="mobile" placeholder="Mobile No">
    	</div>
    </div>

  	<div class="form-group col-sm-6">
    	<div class="">
    		<input type="email" class="form-control" id="email" name="email" placeholder="Email">
    	</div>
    </div>
    <div class="clearfix"></div>
			
			<div class="checkbox" >
				<label>
					<input type="checkbox"> Notify booking confirmation via SMS
				</label>
			</div>

			<div class="checkbox" style=" border:0px solid red">
				<label>
					<input type="checkbox"> To continue please confirm you have read and accepted all our <a href="#">term and condition</a>
				</label>
			</div>
					
			<div class="row col-xs-12"style="border:0px solid red">
				<div class="col-sm-7">
					<button type="submit" class="btn btn-info btn-sm pull-right" style="margin-top:10px">Continue</button>
					<a href="/updatefailure"><button type="button" class="btn btn-info btn-sm pull-right" style="margin-top:10px;margin-right:5px;">Update Failure</button></a>
					<a href="/availableslots"><button type="button" class="btn btn-info btn-sm pull-right" style="margin-top:10px;margin-right:5px;">Available Slots</button></a>
				</div>	
					<p class="col-sm-5" style="margin-top:15px"><i>You can always change or cancel later</i></p>
			</div>
					
		</form>
	 </div>
   </div>
</div>