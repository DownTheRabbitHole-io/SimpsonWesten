<?php
class ExpertiseAdmin extends ModelAdmin {
    private static $managed_models = [
        'Expertise'
    ];

    private static $url_segment = 'expertise';

    private static $menu_title = 'Expertise';

}