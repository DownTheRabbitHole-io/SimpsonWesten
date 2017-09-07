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
            new CheckboxField('All publications', 'All publications'),
            new CheckboxField('Fineprint', 'Fineprint'),
            new CheckboxField('Commercial eSpeaking', 'Commercial eSpeaking'),
            new CheckboxField('Property Speaking', 'Property Speaking'),
            new CheckboxField('Trust eSpeaking', 'Trust eSpeaking'),
            new CheckboxField('Employment Bulletin', 'Employment Bulletin'),
            new CheckboxField('Online News', 'Online News')
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
