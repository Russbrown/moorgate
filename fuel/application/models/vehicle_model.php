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
            $this->db->where('sold', 'no');          
			$result = $this->db->get();
			return $result->result();	
    }

    function getSold(){
            $this->db->select('id, make, model, registration, mileage, fuel_type, price, spec, vehicle_1_img');
            $this->db->from('vehicle');
            $this->db->where('sold', 'yes');          
            $result = $this->db->get();
            return $result->result();   
    }

    function getOne($id) {
            $this->db->select('id, make, model, registration, mileage, fuel_type, price, spec, vehicle_1_img, vehicle_2_img, vehicle_3_img, vehicle_4_img, vehicle_5_img, vehicle_6_img, vehicle_7_img, vehicle_8_img, vehicle_9_img, vehicle_10_img');
            $this->db->from('vehicle');
            $this->db->where('id', $id);
            $result = $this->db->get();
            return $result->result();           
    }
}