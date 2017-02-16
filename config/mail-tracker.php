<?php 

return [
    /**
     * To disable the pixel injection, set this to false.
     */
    'inject-pixel' => true,

    /**
     * To disable injecting tracking links, set this to false.
     */
    'track-links' => true,

    /**
     * Optionally expire old emails, set to 0 to keep forever.
     */
    'expire-days' => 60,

    /**
     * Where should the pingback URL route be?
     */
    'route' => [
        'prefix' => 'email',
        'middleware' => ['web'],
    ],

    /**
     * Where should the admin route be?
     */
    'admin-route' => [
        'prefix' => 'email-manager',
        'middleware' => ['web','super'],
    ],

    /**
     * Admin Template
     * example
     * 'name' => 'layouts.app' for Default emailTracking use 'emailTrackingViews::layouts.app'
     * 'section' => 'content' for Default emailTracking use 'content'
     * 'styles_section' => 'styles' for Default emailTracking use 'styles'
     */
    'admin-template' => [
        'name' => 'emailTrackingViews::layouts.app',
        'section' => 'content',
    ],

    /**
     * Number of emails per page in the admin view
     */
    'emails-per-page' => 30,

    /**
     * Date Format
     */
    'date-format' => 'm/d/Y g:i a',

];
