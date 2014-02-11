<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class MY_DB_active_record extends CI_DB_active_record
{
	public function having_LIKE($key, $value = '', $escape = TRUE)
	{
		return $this->_having_LIKE($key, $value, 'AND ', $escape);
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Sets the HAVING values
	 *
	 * Called by having() or or_having()
	 *
	 * @param	string
	 * @param	string
	 * @return	object
	 */
	protected function _having_LIKE($key, $value = '', $type = 'AND ', $escape = TRUE)
	{
		if ( ! is_array($key))
		{
			$key = array($key => $value);
		}
	
		foreach ($key as $k => $v)
		{
			$prefix = (count($this->ar_having) == 0) ? '' : $type;
	
			if ($escape === TRUE)
			{
				$k = $this->_protect_identifiers($k);
			}
	
			if ( ! $this->_has_operator($k))
			{
				$k .= ' LIKE ';
			}
	
			if ($v != '')
			{
				$v = ' '.$this->escape($v);
			}
	
			$this->ar_having[] = $prefix.$k.$v;
	
			if ($this->ar_caching === TRUE)
			{
				$this->ar_cache_having[] = $prefix.$k.$v;
				$this->ar_cache_exists[] = 'having';
			}
		}
		// 		echo "<br>";
		//         print_r($this);
		// 		echo "<br>";
		return $this;
	}
}
 
/* End of file MY_DB_active_rec.php */
/* Location: ./application/core/MY_DB_active_rec.php */
