<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
      
    }
 
    public function index() {   
    	
    	$content = array( "dashboard/dashboard_home" => null);
    	
    	$this->_view_content($content, "Home");
    }
    	
    public function restaurateurs() {

    	$content = array( 'dashboard/welcome' => null,
    					  'dashboard/dashboard_home'=> null);
    	
    	$this->_view_content($content, "DashboardHome"); 
    }
    
    public function customerdashboardhome() {
    	
    	$content = array( "dashboard/cus_dashboard_home" => null);
    	 
    	$this->_view_content($content, "Home");
    
    }
    
    public function customerdashboardsite() {
    	 
    	$content = array( "dashboard/cus_dashboard_site" => null);
    
    	$this->_view_content($content, "Customer Dashboard Site");
    
    }
    
    
    public function customerdashboardtables() {
    
    	$content = array( "dashboard/cus_dashboard_tables" => null);
    
    	$this->_view_content($content, "Customer Dashboard Tables");
    
    }
    
    
    public function customerdashboardpayments() {
    
    	$content = array( "dashboard/cus_dashboard_payments" => null);
    
    	$this->_view_content($content, "Customer Dashboard Payments");
    
    }
    
    public function customerdashboardbooking() {
    
    	$content = array( "dashboard/cus_dashboard_booking" => null);
    
    	$this->_view_content($content, "Customer Dashboard Booking");
    
    }
    
    public function customerdashboardadminprofile() {
    
    	$content = array( "dashboard/cus_dashboard_admin_profile" => null);
    
    	$this->_view_content($content, "Customer Dashboard Admin Profile");
    
    }
    
    public function customerdashboardbookingadmin() {
    
    	$content = array( "dashboard/cus_dashboard_booking_admin" => null);
    
    	$this->_view_content($content, "Customer Dashboard Admin Profile");
    
    }
    
    public function customerdashboardbookingsview() {
    
    	$content = array( "dashboard/cus_dashboard_bookings_view" => null);
    
    	$this->_view_content($content, "Customer Dashboard Admin Profile");
    
    }
    
    public function customerdashboardpaymentsubmission() {
    
    	$content = array( "dashboard/cus_dashboard_payment_submission" => null);
    
    	$this->_view_content($content, "Customer Dashboard Admin Profile");
    
    }
    
    public function customerdashboardhomeview() {
    
    	$content = array( "dashboard/cus_dashboard_home_view" => null);
    
    	$this->_view_content($content, "Customer Dashboard Admin Profile");
    
    }
    
    public function customerdashboardhomecancel() {
    
    	$content = array( "dashboard/cus_dashboard_home_cancel" => null);
    
    	$this->_view_content($content, "Customer Dashboard Admin Profile");
    
    }
    
    public function customerdashboardsiteadd() {
    
    	$content = array( "dashboard/cus_dashboard_site_add" => null);
    
    	$this->_view_content($content, "Customer Dashboard Admin Profile");
    
    }
    
    
    
    

    public function referencedata() {
    	 
    	$content = array( 'dashboard/welcome' => null,
    				 	  "dashboard/reference_data" => array("alert" => $alert,"alert_message"=>$alert_message,"collapse_name"=>$collapse_name)
    	                   );
    	
    	$this->_view_content($content, "DashboardTables");
     }
     
    public function salarysurveydata($error = null) {
    	
    
    	
    	$content = array('dashboard/welcome' => null,
    					 "dashboard/salary_survey_data" => array("alert" => $alert,"alert_message"=>$alert_message));
     	$this->_view_content($content, "DashboardUploads");
     }                   

    private function _view_content($content, $pagetitle ) {    	 
       
       	dashboard_layout_show( array( "pagetitle"=>$pagetitle,
    						   "template"=> "template/one_panel",
    						   "content" => get_loaded_view($content) ),true);    
    }
}
