<?php

/**
 * Class representing a Media.
 */
class Media
{
    /**
     * Constructor for Media class.
     *
     */
    public function __construct(private int $id, private string $type, private string $path)
    {
        $this->id = $id;
        $this->type = $type;
        $this->path = $path;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getPath()
    {
        return $this->path;
    }
}
