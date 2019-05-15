
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
    <style>
    table, td, th {
        border: 1px solid #b3b3ff;
        padding:3px 10px;
    }
    tr{
        clear:both;
        overflow:hidden;
    }
    .acp_post_table {
        border-collapse: collapse;
        border-color:#b3b3ff;
    }
    </style>
    <table class="acp_post_table">
        <tr>
            <th>Post Name</th>
            <th>Post Slag Name</th>
            <th>Post Shortcode</th>
            <th>Action</th>
        </tr>
        <tr>
            <td><input type="text" name="acp_post_name" class="acp_post_name" id="acp_post_name"></td>
            <td><input type="text" name="acp_post_name" class="acp_post_name" id="acp_post_name"></td>
            <td><input type="text" name="acp_post_name" class="acp_post_name" id="acp_post_name"></td>
            <td><a href="#edit">Edit</a><a href="#delete">Delete</a></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
            <form action="" method="">
                <div class="control-form">
                    <button>Add Post</button>
                </div>
            </form>
            </td>
        <tr>
    </table>

     <script>
        function post_loop(){

        }
     </script>
        



    <?php
 }