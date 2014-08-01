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
		// # Include the Autoloader (see "Libraries" for install instructions)
		// require APPPATH . '/libraries/vendor/autoload.php';
		// use Mailgun\Mailgun;

		// # Instantiate the client.
		// $mgClient = new Mailgun('key-3ax6xnjp29jd6fds4gc373sgvjxteol0');
		// $domain = "samples.mailgun.org";

		// # Make the call to the client.
		// $result = $mgClient->sendMessage($domain, array(
		//     'from'    => 'Excited User <me@samples.mailgun.org>',
		//     'to'      => 'Baz <baz@example.com>',
		//     'subject' => 'Hello',
		//     'text'    => 'Testing some Mailgun awesomness!'
		// ));

		//////
		require APPPATH . '/libraries/Mailgun.php' ;

		mailgun_init('key-afy6amxoo2fnj$u@mc');

		// // Plain text message
		// MailgunMessage::send_text("me@samples.mailgun.org", 
		//                           "'John Doe' <you@mailgun.info>",
		//                           "Hello text PHP API!",
		//                           "Hi!\nI am sending a message using Mailgun PHP API");

		// // Plain text message + tag
		// MailgunMessage::send_text("me@samples.mailgun.org", 
		//                           "'John Doe' <you@mailgun.info>",
		//                           "Hello text PHP API + tag!",
		//                           "Hi!\nI am sending a message using Mailgun PHP API",
		//                           "",
		//                           array("headers" => array(MAILGUN_TAG => "sample_text_php")));

		// MIME message
		$rawMime = 
		    "X-Priority: 1 (Highest)\n".
		    "X-Mailgun-Tag: sample_raw_php\n".
		    "Content-Type: text/plain;charset=UTF-8\n".    
		    "From: me@samples.mailgun.org\n".
		    "To: you@mailgun.info\n".
		    "Subject: Hello raw PHP API!\n".
		    "\n".
		    "This message is sent by Mailgun PHP API";
		MailgunMessage::send_raw("me@samples.mailgun.org", "you@mailgun.info", $rawMime); 

		echo "Messages sent\n";
	}

	function contact(){
		// $this->load->library('url');
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
		redirect('thanks');
	}

}









