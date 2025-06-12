<?php
    return [
        '/' => ['controller' => 'AuthController', 'module' => 'authentication/', 'method' => 'login'],
        'students' => ['controller' => 'StudentController', 'method' => 'index'],
        'students/add' => ['controller' => 'StudentController', 'method' => 'add'],
        'students/edit' => ['controller' => 'StudentController', 'method' => 'edit']
    ];
?>