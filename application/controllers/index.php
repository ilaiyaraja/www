<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
 
public function index()
	{
	//	$data = array("");
		$lhs_views_to_be_loaded = array( "index/home_lhs" => null);
		$rhs_views_to_be_loaded = array( "index/default_rhs" => null );

		lt_layout_show(  array( "pagetitle" =>'Home',
								"left" => get_loaded_view($lhs_views_to_be_loaded),
								"right" => get_loaded_view($rhs_views_to_be_loaded) ) );
	}
	
	public function dinerdetails() {
		$this->_view_content("index/diner_details", "Diner Details");
	}
	
	public function bookingconfirm() {
		$this->_view_content("index/booking_confirm", "Booking Confirm");
	}
	
	public function successbooking() {
		$this->_view_content("index/success_booking", "Successfull Booking");
	}
	
	public function emailformat() {
		$this->_view_content("index/email_format", "Email format");
	}
    	
	public function emailconfirm(){
		$this->_view_content("index/email_confirm", "Email Confirmation");
	}
	
	public function emailsuccess(){
		$this->_view_content("index/email_successful", "Email Successful");
	}
	
	public function emailcancel(){  
		$this->_view_content("index/email_cancel", "Email Cancel");
	}
	
	public function cancelconfirm(){
		$this->_view_content("index/email_cancel_format", "Cancel Confirm");
	}
	public function updatefailure(){
		$this->_view_content("index/update_failure", "Update Failure");
	}
	
	public function availableslots(){
		$this->_view_content("index/available_slots", "Available Slots");
	}
	
    private function _view_content($view, $pagetitle, $data = null) {    	 
    	$content = $this->load->view($view, $data, true);
       	ltone_layout_show(
    	array("pagetitle"=>$pagetitle,
    	"template"=> "template/one_panel",
    	"content" => $content),true);    
    } 
}
