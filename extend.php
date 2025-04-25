<?php

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->content(function ($document) {
            $document->head[] = '<style>
                .discord-widget-container {
                    position: fixed;
                    right: 0;
                    top: 100px;
                    width: 350px;
                    height: 500px;
                    z-index: 9999;
                }
                .discord-widget-container iframe {
                    width: 100%;
                    height: 100%;
                    border: none;
                }
            </style>';
        }),
];
