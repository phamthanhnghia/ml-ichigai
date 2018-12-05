<?php
//use Yii;
use app\models\Data;
set_time_limit(500);
$id =1;
$take_profit = 0.002;
$cut_loss = 0.0004;
$mNext = null;
while(($model = Data::findOne($id)) !== null) {
    $price = $model->price_close;
    $buy = $sell = 0;
    for ($i = $id+1; $i < $id + 96 ;$i++ ){
        $mNext = Data::findOne($i);
        if($mNext == null){
            break;
        }
        $price_next = $mNext->price_close;
        if( $price_next >= $price + $take_profit && $buy == 0){
           $buy = 1;
        }
        if($price_next <= $price - $cut_loss && $buy == 0){
           $buy = -1;
        }
        if($price_next <= $price - $take_profit && $sell == 0){
            $sell = 1;
        }
        if($price_next >= $price + $cut_loss && $sell == 0){
            $sell = -1;
        }
    }
    $model->buy = $buy;
    $model->sell = $sell;
    $model->save();
    if($buy == 1 || $sell == 1){
        $id = $id + 3;
    }else{
        $id++;
    }
    
    $mNext = null;
}
echo "done";