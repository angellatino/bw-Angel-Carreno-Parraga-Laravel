<?php

namespace Illuminate\Routing;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * The middleware registered on the controller.
     *
     * @var array
     */
    protected $middleware = [];

    /**
     * Register middleware on the controller.
     *
     * @param  array|string|\Closure  $middleware
     * @param  array  $options
     * @return \Illuminate\Routing\ControllerMiddlewareOptions
     */
    protected function middleware($middleware, array $options = [])
    {
        // Add the middleware to the list for the controller
        $this->middleware[] = [
            'middleware' => $middleware,
            'options' => & $options,
        ];

        return new ControllerMiddlewareOptions($options);
    }

    // Other methods and functionalities...
}

