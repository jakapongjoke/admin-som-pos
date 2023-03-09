<?php
return [
    'company_table_data' => ['_master','_product_master','_product_group_info'],
    'master_product_table_foreign' => [
        'product_master_foreign_field' => 'id',
        'product_group_info_foreign_field' => 'product_master_id',
    ],
    

];

?>