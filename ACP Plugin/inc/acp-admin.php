
<?php
/**
 * Register a ACP Advance custom post menu page.
 */

 function m4_create_item_admin_menu(){
    add_menu_page(
        'ACP Theme Option',
        'ACP Option',
        'manage_options',
        'acp-item-post',
        'acp_create_plugin_page',
        'dashicons-hammer',
        110
    );
 }

 add_action( 'admin_menu', 'm4_create_item_admin_menu');

 function acp_create_plugin_page(){
    ?>
    <h3>ACP Admin Panal </h3>
    <div class="control-form">
        <label>Custom Post Name : </label>
        <input type="text" placeholder="Custom Post Name"/>
    </div>
    <?php
 }