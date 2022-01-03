<?php

namespace WebTheory\Context;

class Resources
{
    protected string $base;

    protected array $types;

    public function __construct(string $base, array $types)
    {
        $this->base = $base;
        $this->types = $types;
    }

    public function __call($type, $file)
    {
        return $this->get($type, $file[0]);
    }

    public function get($type, $file)
    {
        return $this->base . $this->types[$type] . $file;
    }
}
