<?php
class ContactUs extends Page{
	static $db = array(
        'ContactNumber' => 'Varchar(40)',
        'Mailto' => 'Varchar(100)',
        'SubmitText' => 'Text'
    );

    function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab("Root.Contact", new TextField('ContactNumber', 'Contact Number'));
        $fields->addFieldToTab("Root.OnSubmission", new TextField('Mailto', 'Email submissions to'));
        $fields->addFieldToTab("Root.OnSubmission", new TextareaField('SubmitText', 'Text on Submission'));

        return $fields;
    }
}


class ContactUs_Controller extends Page_Controller{
	static $allowed_actions = array(
        'Form',
    );

    function Form() {
        // Create fields
        $fields = new FieldList(
            new TextField('Name', "Your Full Name"),
            new EmailField('Email', "Your Email"),
			new TextField('Phone', 'Your Phone Number'),
			new TextareaField('Message',"Message")
        );

        // Create action
        $actions = new FieldList(
            new FormAction('SendContactForm', "Send")
        );

        // Create Validators
        $validator = new RequiredFields('Name', 'Email', 'Message');

        return new Form($this, 'Form', $fields, $actions, $validator);
    }

	function SendContactForm($data, $form) {

        //Set data
        $From = 'customerservice@simpsonwestern.co.nz';
        $To = $this->Mailto;
        $Subject = "Contact Form";
        $email = new Email($From, $To, $Subject);
        //set template
        $email->setTemplate('ContactEmail');
        //populate template
        $email->populateTemplate($data);
        //send mail
        $email->send();
        //return to submitted message
        return array(
            'Message' => '<h4>Thank you for contacting us, we will be in touch as soon as possible.</h4>',
            'Form' => ''
        );
    }

	public function Success()
    {
        return isset($_REQUEST['success']) && $_REQUEST['success'] == "1";
    }
}
?>
