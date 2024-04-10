<?php

/**
 * Class representing a Media.
 */
class Media
{
    /**
     * Constructor for Media class.
     *
     * @param int $id The unique identifier of the media.
     * @param string $type The type of the media.
     * @param string $path The path to the media file.
     * 
     */
    public function __construct(private int $id, private string $type, private string $path)
    {
        $this->id = $id;
        $this->type = $type;
        $this->path = $path;
    }


    /**
     * Get the type of the media.
     *
     * @return string The type of the media.
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Get the path to the media file.
     *
     * @return string The path to the media file.
     */
    public function getPath()
    {
        return $this->path;
    }
}
