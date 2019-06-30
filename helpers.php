<?php

if (! function_exists('breadcrumbs')) {
    /**
     * Breadcrumbs instance for the application.
     *
     * @return \Codrasil\Breadcrumbs\Breadcrumbs
     */
    function breadcrumbs()
    {
        return app('breadcrumbs');
    }
}
