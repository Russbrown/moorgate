<?php 
/**
 * Controller to display and process enquiry forms...
 * @author  Dave Gill dave.gill@stoneacre.co.uk
 * @copyright 2013 Decidebloom Ltd 
*/
class stock extends CI_Controller {

	function view($id){
		$vehicle_model = $this->load->model('vehicle_model');
		$vehicle  = $vehicle_model->getOne($id);
		$vars = array('vehicle' => $vehicle, 'layout' => 'stock');
		$page_init = array('location' => 'stockview');
		$this->fuel->pages->render('', $vars, $page_init);
	}

}

