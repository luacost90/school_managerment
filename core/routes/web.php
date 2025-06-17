<?php
    return [
        '/' => ['controller' => 'AuthController', 'module' => 'authentication/', 'method' => 'viewLogin'],
        
        '/dashboard'=>['controller' => 'AuthController', 'module' => 'authentication/', 'method' => 'viewDashboard'],

        'students' => ['controller' => 'StudentController', 'method' => 'index'],
        
        'students/add' => ['controller' => 'StudentController', 'method' => 'add'],
        
        'students/edit' => ['controller' => 'StudentController', 'method' => 'edit']
    ];
?>