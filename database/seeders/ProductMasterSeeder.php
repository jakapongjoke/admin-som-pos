<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Storage;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Helpers\Util;
class ProductMasterSeeder extends Seeder
{
    use \App\Traits\Customer\Inventory\Master\MasterCodeTrait;
    use \App\Traits\Customer\Inventory\ProductMaster\ProductMasterStoneTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jewelry = ['jewelry_1.png','jewelry_2.png','jewelry_3.jpg','jewelry_4.png','jewelry_5.jpg'];
        $stone = ['stone_1.jpg','stone_2.jpg','stone_3.jpg','stone_4.jpg','stone_5.jpg','stone_6.jpg','stone_7.jpg','stone_8.jpg'];
        $certificate_image = ['cer_1.jpg','cer_2.jpg','cer_3.jpg','cer_4.jpg','cer_5.jpg','cer_6.jpg','cer_7.jpg','cer_8.jpg'];
        $master_stone_group = $this->GetMasterCodeByType('ananta','master_stone_group',10)->toArray();
        $master_stone_name = $this->GetMasterCodeByType('ananta','master_stone_name',10)->toArray();
        $master_stone_shape = $this->GetMasterCodeByType('ananta','master_stone_shape',10)->toArray();
        $master_stone_color = $this->GetMasterCodeByType('ananta','master_stone_color',10)->toArray();
        $master_stone_size = $this->GetMasterCodeByType('ananta','master_stone_size',10)->toArray();
        $master_stone_clarity = $this->GetMasterCodeByType('ananta','master_stone_clarity',10)->toArray();
        $master_stone_cutting = $this->GetMasterCodeByType('ananta','master_stone_cutting',10)->toArray();
        $master_stone_certificate_type = $this->GetMasterCodeByType('ananta','master_certificate_type',10)->toArray();
        $master_stone_certificate_image = $this->GetMasterCodeByType('ananta','master_certificate_image',10)->toArray();
        
        $master_product = [];
        foreach($master_stone_group as $master_group){
            $current_stone_name_data = $this->GetMasterCodeByParentID('ananta',$master_group['id'],'master_stone_name',10)->toArray();
         
            if(count($current_stone_name_data)>0){

                for($s=0; $s<300; $s++){
                    $rn = Util::getRandNumArray($master_stone_shape);
                    $master_shape_name = $master_stone_shape[$rn]['master_name'];
                    $master_shape_code = $master_stone_shape[$rn]['master_code'];
                    $master_shape_id = $master_stone_shape[$rn]['id'];

                //     $master_stone =  $master_stone_name[Util::getRandNumArray($master_stone_name)];
                //   $master_stone_name =  $master_stone['id'];
                //   $master_stone_group= $master_stone['parent_id'];

                    $master_stone_description = "master_stone Name: ".$current_stone_name_data[Util::getRandNumArray($current_stone_name_data)]['master_name']." code : ".$current_stone_name_data[Util::getRandNumArray($current_stone_name_data) ]['master_code']." shape ".$master_shape_id." is for ".$master_shape_name." | Shape Code is : ".
                    
                    $master_shape_code." in ".$master_group['master_code'];
                    $data = [
                        "product_stone_code"=>$this->genProductMasterCode("ananta",[$master_group['master_code'],$current_stone_name_data[Util::getRandNumArray($current_stone_name_data)]['master_code'],$master_shape_code]),
                        "running_number"=> $this->getRunningNumber('ananta'),
                        "product_master_caption"=> null,
                        "collection"=> null,
                        "metal"=> null,
                        "size"=> null,
                        "stone_color"=> $master_stone_color[Util::getRandNumArray($master_stone_color)]['id'],
                        "stone_group"=> $master_group[Util::getRandNumArray($master_stone_color)]['id'],
                        "stone_name"=> $master_stone_name[Util::getRandNumArray($master_stone_name)]['id'],
                        "stone_clarity"=> $master_stone_clarity[Util::getRandNumArray($master_stone_clarity)]['id'],
                        "stone_cutting"=> $master_stone_cutting[Util::getRandNumArray($master_stone_cutting)]['id'],
                        "stone_shape"=> $master_shape_id,
                        "master_description"=> $master_stone_description,
                        "master_certificate"=> $master_stone_certificate_type[Util::getRandNumArray($master_stone_certificate_type)]['id'],
                        "master_certificate_image"=>  json_encode([
                            [
                                "location"=>Storage::url('app/public/customer_images/certificate/'.$certificate_image[Util::getRandNumArray($certificate_image)]),
                            ]
                        ]),
                        "net_weight"=> null,
                        "gross_weight"=> null,
                        "sale_price"=> null,
                        "master_price"=> null,
                        "item"=> null,
                        "master_image"=> json_encode([
                            [
                                "location"=>Storage::url('app/public/customer_images/product_master/stone/'.$stone[Util::getRandNumArray($stone)]),
                            ]
                        ]),
                        "master_tag"=> null,
                        "master_type"=> 'product_master_stone',
                        "master_status"=> 'active'
                        // "created_at"=> date(),
                        // "updated_at"=>  date()
                    ];
                    $this->insertProductMaster('ananta',$data );

    
            
            }
            }
            
        }
        
    }
}
