<?php 
/**
 * Controller to display and process enquiry forms...
 * @author  Dave Gill dave.gill@stoneacre.co.uk
 * @copyright 2013 Decidebloom Ltd 
*/
class Enquiry extends CI_Controller {
		/**
	 * Process Contact form...
	 * @author Russ Brown russ.brown@stoneacre.co.uk
	 */

	function contact(){
		// $this->load->library('url');
		$this->load->library('email');
		$this->load->helper('inflector');
		$this->load->model('fuel_data');
		// var_dump($_POST);
		$data = $_POST;
		$this->email->from($data['email'], $data['name']);
		$this->email->to('moorgatemotorcompany@gmail.com');
		$this->email->subject("Contact Form from MoorgateMotorCompany.co.uk");
		$msg = "The following information was submitted:\n";
		foreach($data as $key => $val)
		{
			$msg .= humanize($key, 3).": ".$val."\n";
		}
		$this->email->message($msg);
		// let her rip
		if ( ! $this->email->send())
		{
		    // Generate error
				echo('error');
		}
		redirect('thanks');
	}

}









