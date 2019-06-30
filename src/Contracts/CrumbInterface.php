<?php

namespace Codrasil\Breadcrumbs\Contracts;

interface CrumbInterface
{
    /**
     * Get the human-readable text for a crumb piece.
     *
     * @return string
     */
    public function text();

    /**
     * Get the url for a crumb piece.
     *
     * @return string
     */
    public function url();
}
