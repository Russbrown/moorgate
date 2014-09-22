<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
 
require_once(FUEL_PATH.'models/base_module_model.php');
 
class Vehicle_model extends Base_module_model {
 
    function __construct()
    {
        parent::__construct('vehicle');
    }

    function getall(){
			$this->db->select('id, make, model, registration, mileage, fuel_type, price, spec, vehicle_1_img');
			$this->db->from('vehicle');
			$result = $this->db->get();
			return $result->result();	
    }

    // function getOne(id) {
    //         $this->db->select('id, registration, mileage, fuel_type, price, spec, 1_img, 2_img, 3_img, 4_img, 5_img, 6_img, 7_img, 8_img, 9_img, 10_img');
    //         $this->db->from('vehicle');
    //         $this->db->where('id', id);
    //         $result = $this->db->get();
    //         return $result->result();           
    // }
}