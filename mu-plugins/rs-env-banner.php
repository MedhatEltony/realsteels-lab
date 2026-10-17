<?php
/* Plugin Name: RS Environment Banner */
add_action('wp_body_open', 'rs_env_banner');
add_action('admin_notices', 'rs_env_banner');
function rs_env_banner() {
    $env = wp_get_environment_type();
    if ($env === 'production') { return; }
    echo '<div style="background:#c00;color:#fff;text-align:center;padding:6px;font-weight:bold">'
       . esc_html(strtoupper($env)) . ' ENVIRONMENT</div>';
}