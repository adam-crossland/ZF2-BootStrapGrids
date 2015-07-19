<?php
return array(
    'view_manager' => array(
        'template_map' => array(
//			'widgets/grid' => __DIR__.'/../view/widgets/grid.phtml',
		),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
		'view_helpers' => array(
			'factories' => array(

			),
		),
    ),
	'service_manager' => array(
		'factories' => array(

		),
		'invokables' => array(
			'bootstrap_grid_column_config' => 'BootstrapGrid\Model\ColumnConfig',
			'bootstrap_grid' => 'BootstrapGrid\View\Grid',
		),
	),
);
