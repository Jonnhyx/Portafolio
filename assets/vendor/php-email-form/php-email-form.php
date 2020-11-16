<?php

class Email_Form {

    private $to;
	private $from_name;
	private $from_email;
	private $subject;
	private $message;

	public function setTo($to) {
        $this->to = $to;
	}
	
    public function setFrom_name($from_name) {
        $this->from_name = $from_name;
	}
	
	public function setFrom_email($from_email) {
        $this->from_email = $from_email;
	}
	
	public function setSubject($subject) {
        $this->subject = $subject;
	}
	
	public function setMessage($message) {
        $this->message = $message;
	}

    function send() {

		//mail($this->to,$this->subject,$this->message,$this->from_email);
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Cabeceras adicionales
		$cabeceras .= 'From:' . $this->from_name .  '<' . $this->from_email . '>' . "\r\n";
		
		mail($this->to,$this->subject,$this->message, $cabeceras);
		
	}
}

?>
