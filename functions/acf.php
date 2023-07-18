<?php

/**
 * Functions: Plugin ACF
 *
 * @package BBWP
 */

// Add Options page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

// ACF Admin styling
function bbwp_acf_admin_head()
{
?>
    <style type="text/css">
        .acf-postbox .postbox-header {
            background-color: #ddd;
        }

        .acf-flexible-content .layout {
            border-left: 2px solid #444;
        }

        .acf-flexible-content .layout .acf-fc-layout-handle {
            background-color: #eee;
        }

        .acf-flexible-content .layout .acf-fc-layout-order {
            background: #444;
            color: #f1f1f1;
        }

        .acf-repeater.-row>table>tbody>tr>td,
        .acf-repeater.-block>table>tbody>tr>td {
            border-top: 2px solid #444;
        }

        .acf-repeater .acf-row-handle {
            vertical-align: top !important;
            padding-top: 16px;
        }

        .acf-repeater .acf-row-handle span {
            font-size: 20px;
            font-weight: bold;
            color: #444;
        }

        .acf-repeater .acf-row-handle .acf-icon.-minus {
            top: 30px;
        }

        .acf-icon.-duplicate:before,
        .acf-icon.-duplicate:after {
            content: '';
        }

        .imageUpload img {
            width: 75px;
        }
    </style>
<?php
}
add_action('acf/input/admin_head', 'bbwp_acf_admin_head');
