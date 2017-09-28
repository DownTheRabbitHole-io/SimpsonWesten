<?php
class Subscribe extends Page{
	static $db = array(
        'Mailto' => 'Varchar(100)',
        'ThankyouText' => 'Text',
    );

    function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab("Root.OnSubmission", new TextField('Mailto', 'Email submissions to'));
        $fields->addFieldToTab("Root.OnSubmission", new TextareaField('ThankyouText', 'Thankyou Text'));

        return $fields;
    }
}


class Subscribe_Controller extends Page_Controller{
	static $allowed_actions = array(
        'Form',
    );

    function Form() {
        // Create fields
        $fields = new FieldList(
            new TextField('Name', "Your Full Name"),
            new EmailField('Email', "Your Email"),
            new LabelField('Publication Categories'),
            new CheckboxField('All publications', '<strong>All publications</<strong>'),
            new CheckboxField('Fineprint', '<strong>Fineprint:</strong> Our quarterly general newsletter with helpful articles on a wide range of legal topics suitable for both business and personal clients'),
            new CheckboxField('Commercial eSpeaking', '<strong>Commercial eSpeaking:</strong> Our quarterly update on legal issues affecting our business clients'),
            new CheckboxField('Property Speaking', '<strong>Property Speaking:</strong>  Our quarterly update for owners and tenants of residential and commercial property'),
            new CheckboxField('Trust eSpeaking', '<strong>Trust eSpeaking:</strong>  Our quarterly update on issues affecting trusts'),
            new CheckboxField('Employment Bulletin', '<strong>Employment Bulletin:</strong> Keep up to date with developments in employment, HR and health and safety'),
            new CheckboxField('Online News', '<strong>Online News:</strong> Receive regular updates from our Savvy Lawyer blog and important legal alerts')
        );

        // Create action
        $actions = new FieldList(
            new FormAction('SendSubscribeForm', "Subscribe")
        );

        // Create Validators
        $validator = new RequiredFields('Name', 'Email');

        return new Form($this, 'Form', $fields, $actions, $validator);
    }

	function SendSubscribeForm($data, $form) {

        // colate categories
        $categories = '';
        foreach($data as $key => $value){
          if($value == 1){
            $categories .= $key . '; ';
          }
        }

        $subscriber = new Subscriber();
        $subscriber->Name = $data['Name'];
        $subscriber->Email = $data['Email'];
        $subscriber->Categories = $categories;

        $subscriber->write();

        $data['Categories'] = $categories;

        //Set data
        $From = 'customerservice@simpsonwestern.co.nz';
        $To = $this->Mailto;
        $Subject = "New Subscriber";
        $email = new Email($From, $To, $Subject);
        //set template
        $email->setTemplate('SubscriberEmail');
        //populate template

        $email->populateTemplate($data);
        //send mail
        $email->send();
        //return to submitted message
        return array(
            'Message' => '<h4>'.$this->ThankyouText.'</h4>',
            'Form' => ''
        );
    }

}
?>
