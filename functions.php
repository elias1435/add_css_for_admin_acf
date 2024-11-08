// ACF Admin CSS
function my_acf_admin_head() {
    ?>
    <style type="text/css">
        /* Add a top border to the first cell in each row */
        .acf-field-repeater .acf-repeater table.acf-table tbody tr.acf-row > td {
            border-top: 2px solid #5bc9de !important;
        }
    </style>
    <?php
}
add_action('acf/input/admin_head', 'my_acf_admin_head');
