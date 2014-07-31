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
	function contactForm(){
		// $this->load->library('mailgun/vendor/autoload');
		# Include the Autoloader (see "Libraries" for install instructions)
		// require 'vendor/autoload.php';
		// use Mailgun\Mailgun;

		# Instantiate the client.
		// $mgClient = new Mailgun('key-3ax6xnjp29jd6fds4gc373sgvjxteol0');
		// $domain = "samples.mailgun.org";

		// # Make the call to the client.
		// $result = $mgClient->sendMessage($domain, array(
		//     'from'    => 'Excited User <me@samples.mailgun.org>',
		//     'to'      => 'Baz <poa02rb@yahoo.co.uk',
		//     'subject' => 'Hello',
		//     'text'    => 'Testing some Mailgun awesomness!'
		// ));
		// show thank you page.
		// $page_init = array('location' => '/thanks');
		// $this->load->module_library(FUEL_FOLDER, 'fuel_page', $page_init);
		// $this->fuel_page->render();
	}

	function contact(){
		$this->load->library('email');
		$this->load->helper('inflector');
		$this->load->model('fuel_data');
		// var_dump($_POST);
		$data = $_POST;
		$this->email->from($data['email'], $data['name']);
		$this->email->to('poa02rb@yahoo.co.uk');
		$this->email->subject("Test");
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
		// show thank you page.
		// $page_init = array('location' => '/service/volvo-form-thanks', 'layout'=>'forms');
		// $this->load->module_library(FUEL_FOLDER, 'fuel_page', $page_init);
		// $this->fuel_page->render();
	}

}









