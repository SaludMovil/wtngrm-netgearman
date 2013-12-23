<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Desyncr\Wtngrm\Netgearman\Controller\Worker'    => 'Desyncr\Wtngrm\Netgearman\Controller\WorkerController',
        )
    ),

    'console' => array(
        'router' => array(
            'routes' => array(
                'netgearman_worker_route' => array(
                    'options' => array(
                        'route' => 'netgearman worker execute <workerid>',
                        'defaults' => array(
                            '__NAMESPACE__' => 'Desyncr\Wtngrm\Netgearman\Controller',
                            'controller' => 'Worker',
                            'action' => 'execute'
                        )
                    )
                )
            )
        )
    ),
);
