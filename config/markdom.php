<?php

return [
    /**
     * Mapping elements to class names
     * For instance
     * 'p' => 'lead',
     * will give all <p> elements the class "lead"
     * <p class="lead">
     */
    'classes' => [
        'h1' => 'text-3xl font-bold mt-1 mb-2 border-b',
        'h2' => 'text-2xl font-bold my-1 border-b',
        'h3' => 'text-xl font-bold my-1',
        'p' => 'py-2',
        'ul' => 'list-disc list-inside',
        'ol' => 'list-decimal list-inside',
        'pre' => 'my-1'
    ],

    'commonmark' => [
        /**
         * Options for CommonMark parser
         * https://commonmark.thephpleague.com/1.5/configuration/#configuration
         */
        'enable_em' => true,
        'enable_strong' => true,
        'use_asterisk' => true,
        'use_underscore' => true,
        'unordered_list_markers' => ['-', '*', '+'],
        'html_input' => 'escape',
        'allow_unsafe_links' => false,
        'max_nesting_level' => INF,

        /**
         * CommonMark extensions to use
         * https://commonmark.thephpleague.com/1.5/extensions/overview/
         */
        'extensions' => [
            League\CommonMark\Extension\Autolink\AutolinkExtension::class,
            League\CommonMark\Extension\Strikethrough\StrikethroughExtension::class,

        ]
    ],

    /**
     * It is possible to have code tags automatically
     * parsed and highlighted
     *
     * Remember to add the stylesheet to your page, if using this!
     * @markdomStyles()
     */
    'code_highlight' => [
        'enabled' => env('MARKDOM_CODE_HIGHLIGHT', false),
        'theme' => 'default',
        'languages' => [
            'javascript',
            'php',
            'css',
        ],
    ],
];