<?php
class PositionAdmin extends ModelAdmin {
    private static $managed_models = [
        'Position'
    ];

    private static $url_segment = 'position';

    private static $menu_title = 'Position';

}