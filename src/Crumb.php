<?php

namespace Codrasil\Breadcrumbs;

class Crumb implements Contracts\CrumbInterface
{
    /**
     * The attribute containing text and url keys.
     *
     * @var array
     */
    protected $attributes;

    /**
     * Set the attributes array.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * Get the human-readable text for a crumb piece.
     *
     * @return string
     */
    public function text()
    {
        return $this->attributes['text'] ?? null;
    }

    /**
     * Get the url for a crumb piece.
     *
     * @return string
     */
    public function url()
    {
        return $this->attributes['url'] ?? null;
    }
}
