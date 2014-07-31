<?php
/**
 * @author  Dave Gill dave.gill@stoneacre.co.uk
 * @copyright 2013 Decidebloom Ltd
 * @todo
*/
class Fuel_data extends MY_Model {
	function __construct()
	{
		parent::__construct('fuel_site_variables'); // table name, initialization params
	}
	function getVariable($var){
		$this->db->select('value');
		$this->db->where('name', $var);
		$result = $this->db->get('fuel_site_variables');
		if ($result->num_rows() > 0){
			$data = $result->result();
			return $data[0]->value;
		} else {
			return '';
		}
	}
	function getBusinessPage($var){
		$page = 'business/' . $var;
		return $this->getFuelPage($page);
	}
	function getFuelPage($var){
		$this->db->select('location');
		$this->db->where('location', $var);
		$result = $this->db->get('fuel_pages');
		if ($result->num_rows() > 0){
			$data = $result->result();
			return $data[0]->location;
		} else {
			return '';
		
		}
	}
}