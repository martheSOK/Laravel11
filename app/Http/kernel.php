protected $routeMiddleware = [
    // autres middlewares
    'entreprisemiddleware' => \App\Http\Middleware\EntrepriseMiddleware::class,

    'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class

];


