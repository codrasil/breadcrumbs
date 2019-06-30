<?php

namespace Codrasil\Breadcrumbs\Contracts;

interface BreadcrumbsInterface
{
    /**
     * Retrieve a segment instance from
     * array of segments.
     *
     * @param  integer $position
     * @return string
     */
    public function segment(int $position = 0);

    /**
     * Retrieve the crumbs via key.
     *
     * @param  string $key
     * @return array
     */
    public function crumbs(string $key);

    /**
     * Parse the segments.
     *
     * @param  string $uri
     * @return \Illuminate\Support\Collection
     */
    public function parseSegments(string $uri);

    /**
     * Retrieve the 'breadcrumb' middleware's parameter.
     *
     * @param  array $middlewares
     * @return array
     */
    public function parseCrumbs(array $middlewares);
}
