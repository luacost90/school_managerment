<?php
    return [
        '/' => ['controller' => 'AuthController', 'module' => 'authentication/', 'method' => 'viewLogin'],
        'students' => ['controller' => 'StudentController', 'method' => 'index'],
        'students/add' => ['controller' => 'StudentController', 'method' => 'add'],
        'students/edit' => ['controller' => 'StudentController', 'method' => 'edit']
    ];
?>