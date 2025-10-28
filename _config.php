<?php
use SilverStripe\Forms\HTMLEditor\TinyMCEConfig;

try {

    TinyMCEConfig::get('cms')->setOption('min_height', 420);
    TinyMCEConfig::get('cms')->setOption('max_height', 600);

    TinyMCEConfig::get('cms')->removeButtons('underline', 'alignjustify', 'blocks');

    TinyMCEConfig::get('cms')->enablePlugins(
        'autoresize',
        'fullscreen',
        'visualblocks',
        'anchor',
        'wordcount',
        'lists',
        'advlist'
    );

    TinyMCEConfig::get('cms')->insertButtonsAfter(
        'removeformat',
        '|',
        'superscript',
        'subscript',
        'blockquote',
        'hr'
    );
    TinyMCEConfig::get('cms')->addButtonsToLine(2, '|', 'fullscreen');

    TinyMCEConfig::get('cms')->insertButtonsBefore('pastetext', 'styles');

    TinyMCEConfig::get('cms')->setOptions(['extended_valid_elements' => 'ol[start]',]);

    if(is_null(TinyMCEConfig::get('cms')->getOption('style_formats'))) {
        TinyMCEConfig::get('cms')->setOptions([
            'importcss_append' => true,
            'style_formats' => [
                [
                    'title' => 'Text',
                    'items' => [
                        [
                            'title' => 'Paragraph',
                            'block' => 'p',
                            'attributes' => [
                                'class' => ''
                            ]
                        ],
                        [
                            'title' => 'Heading 1',
                            'block' => 'h1',
                            'attributes' => [
                                'class' => ''
                            ]
                        ],
                        [
                            'title' => 'Heading 2',
                            'block' => 'h2',
                            'attributes' => [
                                'class' => ''
                            ]
                        ],
                        [
                            'title' => 'Heading 3',
                            'block' => 'h3',
                            'attributes' => [
                                'class' => ''
                            ]
                        ],
                        [
                            'title' => 'Heading 4',
                            'block' => 'h4',
                            'attributes' => [
                                'class' => ''
                            ]
                        ],
                        [
                            'title' => 'Heading 5',
                            'block' => 'h5',
                            'attributes' => [
                                'class' => ''
                            ]
                        ],
                        [
                            'title' => 'Heading 6',
                            'block' => 'h6',
                            'attributes' => [
                                'class' => ''
                            ]
                        ]
                    ]
                ]
            ]
        ]);
    }

} catch (\Exception $exception) {}