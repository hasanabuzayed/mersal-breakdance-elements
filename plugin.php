<?php

/**
 * Plugin Name: Mersal Breakdance Elements
 * Plugin URI: https://mersalparfums.com/
 * Description: Mersal Elements built using Breakdance Element Studio
 * Author: Mersal Parfums, LLC
 * Author URI: https://mersalparfums.com/
 * License: GPLv2
 * Text Domain: mersalparfums
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace MersalBreakdanceElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'MersalBreakdanceElements',
        'element',
        'Custom Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'MersalBreakdanceElements',
        'macro',
        'Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'MersalBreakdanceElements',
        'preset',
        'Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);
