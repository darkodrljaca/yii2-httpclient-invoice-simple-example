<?php

use yii\grid\GridView;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <h2>Invoices from yii2-api-invoice-simple-example.test</h2>                        
    
    <?= GridView::widget([
            'dataProvider' => $data,
            // 'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'date',
                'document',
                'customer_name',
                'customer_address',                
            ],  
        ]); 
    ?>            
    
</div>
