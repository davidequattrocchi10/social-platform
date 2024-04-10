<?php

/**
 * Class representing a Post.
 */
class Post
{
    /**
     * Constructor for Post class.
     *
     */
    private array $mediaList;

    public function __construct(private int $id, private string $title, private string $tags, Media ...$mediaList)
    {
        $this->id = $id;
        $this->title = $title;
        $this->tags = $tags;
        $this->mediaList = $mediaList;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function getMediaList()
    {
        return $this->mediaList;
    }
}
