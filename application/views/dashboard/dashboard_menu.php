    <nav class="navbar navbar-default dashboard-nav" role="navigation">
    	
    	
    	<!-- <div class="navbar-header  col-sm-3">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navigator">
         		<a href="/"><img class="img-responsive pad-top" src="/images/kekoo_logo.png" alt="OakLeaf"></a>
					
					</div>
				</div> -->
	<div class="navbar-header col-xs-12 col-sm-4">
     		<a href="/"><img class="img-responsive pad-top col-xs-8 col-sm-10" src="/images/kekoo_logo.png" alt="OakLeaf"></a>
     		
     		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
    	    <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
     	</div>
     	
     	<div class="collapse navbar-collapse">
          <ul class="nav navbar-nav " style="border:0px solid red;">
            <?php
            $this->lineten->_show_selected_option("aboutus", "ABOUT US");
            $this->lineten->_show_selected_option("diners", "DINERS");
            $this->lineten->_show_selected_option("restaurateurs", "RESTAURATEURS");
            $this->lineten->_show_selected_option("contactus", "CONTACT US");
            ?>
          </ul>
    </div>
    </nav>
    
    
    