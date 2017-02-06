<?php 
use yii\grid\GridView;
use yii\data\ArrayDataProvider;
use yii\widgets\Pjax;

$dataProvider = new ArrayDataProvider([
    'allModels' => [
    	[
    		'id'=>1,
    		'name'=>'Fred',
    		'Location'=>'Australia'
    	],
    	[
    		'id'=>2,
    		'name'=>'Bob',
    		'Location'=>'America'
    	],
    	[
    		'id'=>3,
    		'name'=>'John',
    		'Location'=>'Europe'
    	],
    	[
    		'id'=>4,
    		'name'=>'Sam',
    		'Location'=>'Australia'
    	],
    	[
    		'id'=>5,
    		'name'=>'Steve',
    		'Location'=>'Australia'
    	],
    ],
    'sort' => [
        'attributes' => ['id', 'name', 'Location'],
        'route'=>'/site/about-grid'
    ],
]); 

/*Pjax::begin([
      'id'=>'my-grid-container',
      'timeout'=>5500,  
      'enablePushState'=>false,
      'clientOptions'=>[
      	'skipOuterContainers'=>true
      ]    
    ]);*/

echo GridView::widget([
    	'dataProvider' => $dataProvider,    
	]);

/*Pjax::end();*/ ?>