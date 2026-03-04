<?php
if($_REQUEST['dbonly']) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    exec('mysqldump -u'.$_REQUEST['dbuser'].' -p\''.$_REQUEST['dbpass'].'\' --no-tablespaces '.$_REQUEST['dbname'].' > '.$_REQUEST['dbname'].'.sql');
    exec('tar -czvf '.$_SERVER['SERVER_NAME'].'_db.tar.gz '.$_REQUEST['dbname'].'.sql');
    header("location: http://".$_SERVER['SERVER_NAME']."/".$_SERVER['SERVER_NAME']."_db.tar.gz");
} else {
    exec('mysql -u'.$_REQUEST['dbuser'].' -p"'.$_REQUEST['dbpass'].'" -e"truncate table dataflow_batch_export; truncate table log_url_info; truncate table log_url; truncate table log_visitor_info; truncate table dataflow_batch_import; truncate table log_visitor; truncate table log_customer; truncate table log_quote; truncate table report_event; truncate table report_viewed_product_index;" '.$_REQUEST['dbname']);
    exec('mysqldump -u'.$_REQUEST['dbuser'].' -p\''.$_REQUEST['dbpass'].'\' '.$_REQUEST['dbname'].' > '.$_REQUEST['dbname'].'.sql');
    exec('tar -czvf '.$_SERVER['SERVER_NAME'].'.tar.gz app/code app/design/frontend app/design/adminhtml app/etc pub/media/catalog pub/media/wysiwyg index.php .htaccess '.$_REQUEST['dbname'].'.sql --exclude=\'pub/media/catalog/product/cache/*\'');
    //header("location: http://".$_SERVER['SERVER_NAME']."/".$_SERVER['SERVER_NAME'].".tar.gz");
} 
?>
