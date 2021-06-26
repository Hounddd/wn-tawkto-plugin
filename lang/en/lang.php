<?php return [
    'plugin' => [
        'name' => 'TawkTo Plugin',
        'description' => 'Add TawkTo chat to your site.'
    ],
    'components' => [
        'tawkto' => [
            'name' => 'TawkTo',
            'description' => 'Add TawkTo code to your layout/page',
            'tawkto_chat_link' => 'TawkTo direct chat link',
            'tawkto_chat_link_desc' => 'TawkTo chat link, override the site settings'
        ]
    ],
    'settings' => [
        'description' => 'Configure TawkTo account',
        'label' => 'TawkTo direct chat link',
        'commentAbove' => 'You can find it in property settings/chat widget/direct chat link',
        'comment' => 'Full link with protocol ex: https://tawk.to/chat/7693b99e9b484793879558af/d9712c58',
    ]
];
