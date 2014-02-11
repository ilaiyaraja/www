    <div class="navbar navbar-default" role="navigation">
    	<div class="navbar-header col-xs-12 col-sm-3">
     		
     		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
    	    <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
             <a href="/"><img class="img-responsive pad-top" src="/images/logo.gif" alt="OakLeaf"></a>
          
     	</div>
     	
     	<div class="collapse navbar-collapse">
          <ul class="nav navbar-nav col-sm-9">
            <?php
			$this->lineten->_show_selected_option("index", "Home");
            $this->lineten->_show_selected_option("aboutus", "Restaurants");
            $this->lineten->_show_selected_option("services", "Menus");
            $this->lineten->_show_selected_option("portfolio", "Online shop");
            $this->lineten->_show_selected_option("portfolio", "Events");
            $this->lineten->_show_selected_option("portfolio", "About Us");
            $this->lineten->_show_selected_option("contactus", "Contact Us");
            ?>
          </ul>
        </div>
    </div>
    
