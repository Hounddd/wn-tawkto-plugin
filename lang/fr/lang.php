<?php return [
    'plugin' => [
        'name' => 'TawkTo Plugin',
        'description' => 'Ajoutez le chat TawkTo à votre site.'
    ],
    'components' => [
        'tawkto' => [
            'name' => 'TawkTo',
            'description' => 'Ajouter le code TawkTo à votre mise en page/page',
            'tawkto_chat_link' => 'Lien de chat direct TawkTo',
            'tawkto_chat_link_desc' => 'Lien vers le chat TawkTo, écrase les paramètres du site'
        ]
    ],
    'settings' => [
        'description' => 'Configurer le compte TawkTo',
        'label' => 'Lien direct du chat TawkTo',
        'commentAbove' => 'Trouvez-le dans les paramètres de propriété/chat widget/lien vers le chat direct',
        'comment' => 'Lien complet avec le protocole ex: https://tawk.to/chat/7693b99e9b484793879558af/d9712c58',
    ]
];
