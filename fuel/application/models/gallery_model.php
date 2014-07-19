<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
 
require_once(FUEL_PATH.'models/base_module_model.php');
 
class Gallery_model extends Base_module_model {
 
    function __construct()
    {
        parent::__construct('gallery');
    }

    function getImages(){
			$this->db->select('img, href');
			$this->db->from('gallery');
			$result = $this->db->get();
			return $result->result();	
    }
}