Inspinia Admin Theme
====================
v2.7.1

这是一个商业模板,使用前请先购买版权

https://wrapbootstrap.com/theme/inspinia-responsive-admin-theme-WB0R5L90S
真心不贵，只要18美刀，程序猿半天的工资。比免费模板强大多了。

main.php增加

	'components' => [
	    'view' => [
	         'theme' => [
		 'pathMap' => [
		'@app/views' => '@vendor/lkk/yii2-inspinia/views'
		],
	        ],
	    ],
	],

或者 将vendor/lkk/yii2-inspinia/views下的文件，替换自己views下的文件

加载AppAsset

编辑 backend\assets\AppAsset.php

	class AppAsset extends AssetBundle
	{
	    ...
	    public $depends = [
	        'lkk\inspinia\AppAsset',
	    ];
	}

views/layouts/sidebar.php的$menu，大体上这样

	$controllerName = Yii::$app->controller->id;
	$actionName = Yii::$app->controller->action->id;
	$moduleName = Yii::$app->controller->module->id;
	
	$menu = [
		[
		'url' => '/home',
			'label' => '首页',
			'icon' => 'fa fa-dashboard',
		],
		[
			'url' => '/money',
			'label' => '财务管理',
			'icon' => 'fa fa-money',
			'options' => ['class' => $controllerName == 'money' ? 'active' : ''],
		],
		[
			'url' => '#',
			'label' => '项目管理',
			'icon' => 'fa fa-cubes',
			'items' => [
			 	[
		    	    'url' => '/project/default',
		    	    'label' => '项目列表',
		    	    'options' => ['class' => $controllerName == 'default' && $moduleName == 'project' ? 'active' : ''],
				],
		    	[
		        	'url' => '/project/create',
		        	'label' => '新增项目',
		        	'options' => ['class' => $controllerName == 'create' && $moduleName == 'project' ? 'active' : ''],
		    	],
			],
			'options' => ['class' => $moduleName == 'project' ? 'active' : ''],
		],
	]

如指定页面error使用layouts/empty，方法如下

	public function beforeAction($action)
	{
	    if (parent::beforeAction($action)) {
	        if ($action->id=='error')
		$this->layout ='empty';
	        return true;
	    } else {
	        return false;
	    }
	}
inspinia Panel使用

	<?php Panel::begin([
	    'title'=>$this->title,
	    'description'=> '描述',
	    'toolbar'=>[
	        ...
	    ]
	])?>
	
	    <?php echo GridView::widget([
	        'dataProvider' => $dataProvider,
	        'tableOptions' => ['class' => 'table table-hover']
	    ]); ?>
	
	<?php Panel::end()?>

toolbar参数

	'toolbar'=>[
	        [
		'title' => '',
		'link'  => Url::to(['/']),
		'icon'  => 'wrench',
		'items' => [
		[
		    'title' => 'Item 1',
		    'link'  => Url::to(['/']),
		    'icon'  => 'earth',
		],
		[
		    'title' => 'Item 2',
		    'link'  => Url::to(['/']),
		    'icon'  => 'pencil',
		],
		],
	        ],
	        [
		'title' => 'QQ',
		'link'  => Url::to(['http://qq.com']),
		'icon'  => 'qq',
	        ]
	    ]