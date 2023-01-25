<?php 
if(!function_exists('halim_demo_import_data')){
    function halim_demo_import_data() {
        return array(
            array(
                'import_file_name' => esc_html__('Demo Import', 'halim'),
                'local_import_file' => trailingslashit( get_template_directory() ) . 'demo-export-file/halimsiteexport.xml',
                'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo-export-file/halimwidget.wie',
            )
        );
    }
}
    add_filter( 'ocdi/import_files', 'halim_demo_import_data' );
?>