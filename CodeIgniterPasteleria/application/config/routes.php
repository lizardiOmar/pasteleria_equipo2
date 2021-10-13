<?php
//La lista de rutas se le de arriba para abajo, asi que se agregarán nuevas rutas al final
//Funcionan de la siguiente manera:
//$route['ruta']='Controlador/función';
$route['default_controller'] = 'HomeC/contacto'; 
$route['contacto'] = 'HomeC/contacto';
$route['acceso'] = 'HomeC/acceder';
$route['registro'] = 'HomeC/registrarme';

$route['clientes/(:num)'] = 'ClientesC/perfil/$1';
$route['productos/(:num)'] = 'ClientesC/verCatalogo/$1';

$route['administrador/(:num)'] = 'AdministradoresC/perfil/$1';
$route['editarProductos/(:num)'] = 'AdministradoresC/verProductosEditables/$1';
$route['editar/(:num)/(:num)'] = 'AdministradoresC/editar/$1/$2';
$route['agregarProductos/(:num)'] = 'AdministradoresC/registrarProductos/$1';
