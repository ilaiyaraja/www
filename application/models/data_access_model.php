<?php
 


class Data_access_model extends CI_Model
{

	/**
	 * This function retrieves the data from the table and returns.
	 * 
	 * @param  $table_name - Name of the table to be specified (required )
	 * @param  $limit_from - limit from row index (optional)
	 * @param  $limit_to   - limit to row index (optional) 
	 *                 
	 * @return array            
	 **/       
	
	public function get_data($table_name, $limit_from = null , $limit_to = null)
	{                               
		if( isset($limit_from) && isset($limit_to) )     
			$query = $this->db->get($table_name, $limit_to, $limit_from);
		else 	          
			$query = $this->db->get($table_name);

		return $query->result(); 
	} 
	
	
	/**
	 * This function returns the number of records in a table.
	 *
	 * @param  $table_name - Name of the table to be specified (required )
	 * @return integer
	 **/
	
	public function get_record_count($table_name)
	{
		$CI =& get_instance();
		$records_count =  $CI->db->count_all_results(OL_SALARY_SURVEY_DETAILS);
		return $records_count;
	}
	
	/**
	 * This function inserts a group of data in the given table.
	 *
	 * @param  $table_name - Name of the table to be specified (required )
	 * @param  $data - group of data (required)
	 *
	 * @return void
	 **/
	                        
	public function insert_data_group($table_name, $data)
	{
		$this->db->insert($table_name, $data);
	} 
	         
	
	/**   
	 * This function inserts the groups of data in the given table.
	 *
	 * @param  $table_name - Name of the table to be specified (required )
	 * @param  $data - groups of data (required) 
	 *
	 * @return void
	 **/
	                    
	public function insert_multiple_data_groups($table_name, $data)
	{ 
		$this->db->insert_batch($table_name, $data); 
	}
	
	/**
	 * This function truncates all the data from the given table.
	 *
	 * @param  $table_name - Name of the table to be specified (required )
	 *
	 * @return void
	 **/
	
	public function delete_all_data($table_name)
	{
		$this->db->empty_table($table_name);
	}
	 
	public function delete_table_row($table_name, $id){
		$this->db->delete($table_name, $id);
	}
       
}