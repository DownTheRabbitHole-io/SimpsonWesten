<?php
class OfficeAdmin extends ModelAdmin {
    private static $managed_models = [
        'Office'
    ];

    private static $url_segment = 'offices';

    private static $menu_title = 'Offices';

}