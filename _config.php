<?php
use SilverStripe\Forms\HTMLEditor\TinyMCEConfig;
use SilverStripe\Forms\HTMLEditor\HTMLEditorConfig;

TinyMCEConfig::get('cms')->setOption('height', 420);
TinyMCEConfig::get('cms')->setOption('min_height', 420);
TinyMCEConfig::get('cms')->setOption('max_height', 960);

TinyMCEConfig::get('cms')->removeButtons('underline', 'alignjustify');

TinyMCEConfig::get('cms')->enablePlugins(
    'fullscreen',
    'visualblocks',
    'hr',
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
TinyMCEConfig::get('cms')->addButtonsToLine(1, '|', 'visualblocks');
TinyMCEConfig::get('cms')->addButtonsToLine(2, '|', 'fullscreen');

TinyMCEConfig::get('cms')->insertButtonsAfter('formatselect', 'styleselect');

TinyMCEConfig::get('cms')->setOptions([
    'extended_valid_elements' => 'ol[start]',
]);

HTMLEditorConfig::get('cms')->setOption('theme_advanced_styles', 'highlight=highlight;no-border=no-border,break=break');
