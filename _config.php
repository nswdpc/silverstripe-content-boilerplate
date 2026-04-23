<?php

use SilverStripe\TinyMCE\TinyMCEConfig;

try {

    /** @var \SilverStripe\TinyMCE\TinyMCEConfig $editorFieldConfig */
    $editorFieldConfig = TinyMCEConfig::get('cms');

    $editorFieldConfig->setOption('min_height', 420);
    $editorFieldConfig->setOption('max_height', 600);

    $editorFieldConfig->removeButtons('underline', 'alignjustify', 'blocks');

    $editorFieldConfig->enablePlugins(
        'autoresize',
        'fullscreen',
        'visualblocks',
        'anchor',
        'wordcount',
        'lists',
        'advlist'
    );

    $editorFieldConfig->insertButtonsAfter(
        'removeformat',
        '|',
        'superscript',
        'subscript',
        'blockquote',
        'hr'
    );
    $editorFieldConfig->addButtonsToLine(2, '|', 'fullscreen');

    $editorFieldConfig->insertButtonsBefore('pastetext', 'styles');

    $editorFieldConfig->setOptions(['extended_valid_elements' => 'ol[start]',]);

    if (is_null($editorFieldConfig->getOption('style_formats'))) {
        $editorFieldConfig->setOptions([
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

} catch (\Exception) {
}
