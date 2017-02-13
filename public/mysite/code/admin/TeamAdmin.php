<?php
class TeamAdmin extends ModelAdmin {
    private static $managed_models = [
        'Team'
    ];

    private static $url_segment = 'teams';

    private static $menu_title = 'Teams';

}