  <div style="background:#ddd; padding:5px; margin-top:10px">
RESTAURANT DETAILS 
<button type="submit" class="btn btn-default">VIEW</button>
<button type="submit" class="btn btn-default">MODIFY</button>
<button type="submit" class="btn btn-default">CANCEL</button>

<button type="submit" class="btn btn-success pull-right">STATUS - DEMO MODE</button>
</div>

 <div class="clearfix"></div>
 <br/>
<div class="col-sm-6">

<div class="form-group">
    <label for="restaurantname" class="col-sm-3 control-label">CLOSING TIME MON</label>
	<div class="col-sm-9">
 		<select class="form-control">
  			<option>SELECT CLOSING TIME</option>
		</select>
	</div>
</div>

   <div class="clearfix"></div>
<div class="form-group">
    <label for="restaurantname" class="col-sm-3 control-label">ADDRESS LINE2</label>
   
    <div class="col-sm-9">
      <input type="restaurantname" class="form-control" id="restaurantname" placeholder="#000000">
    </div>
  </div>
     <div class="clearfix"></div>
  <div class="form-group">
    <label for="restaurantname" class="col-sm-3 control-label">CLOSING TIME MON</label>
	<div class="col-sm-9">
 		<select class="form-control">
  			<option>SELECT CLOSING TIME</option>
		</select>
	</div>
</div>
     <div class="clearfix"></div>
  
  <div class="form-group">
    <label for="restaurantname" class="col-sm-3 control-label">CLOSING TIME MON</label>
	<div class="col-sm-9">
 		<select class="form-control">
  			<option>SELECT CLOSING TIME</option>
		</select>
	</div>
</div>
  
  </div>
  
  <div class="col-sm-6">
  <label class="btn btn-default">BATCH UPLOAD</label><br/><br/>
  <P>DOWNLOAD CSV TEMPLATE</P>
      <div class="clearfix"></div>
  <button type="submit" class="btn btn-default">DOWNLOAD</button>
       <div class="clearfix"></div>
    <P>UPLOAD CSV REFERENCE DATA</P>
  
  <div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-success btn-file">
								Browse&hellip; <input type="file" name = "" id="">
							</span>  
						</span>
						<input type="text" class="form-control" readonly>
	</div>
  
  </div>
  <div class="clearfix"></div>
 <br/>
  <div class="col-sm-offset-5">
  
<button type="submit" class="btn btn-default">ADD MORE</button>
<button type="submit" class="btn btn-default">NEXT</button>

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