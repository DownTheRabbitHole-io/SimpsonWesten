<?php
class BlogPostExtension extends DataExtension
{  
    private static $db = [
        'Featured'        => 'Boolean',
        'Popular'         => 'Boolean',
    ];

    private static $has_one = [];

	/**
	 * @var array
	 */
	private static $many_many = array(
		'Profiles' => 'Profile',
	);

    private static $belongs_many_many = [];


    public function updateCMSFields(FieldList $fields) {
          $fields->insertAfter(new CheckBoxField('Featured', 'Featured'), 'Title');
          $fields->insertAfter(new CheckBoxField('Popular', 'Most Popular'), 'Title');

        $tagField = TagField::create(
            'Profiles',
            'Linked Profiles',
            Profile::get(),
            $this->owner->Profiles()
            )
            ->setShouldLazyLoad(true) // tags should be lazy loaded
            ->setCanCreate(false);     // new tag DataObjects can be created

        $fields->insertBefore($tagField, 'Tags');
    }


   
}