<?php

/**
 * Class representing a Post.
 */
class Post
{
    /**
     * Constructor for Post class.
     * 
     * @param int $id The unique identifier of the post.
     * @param string $title The title of the post.
     * @param string $tags The tags associated with the post.
     * @param Media $mediaList The list of media associated with the post.
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


    /**
     * Get the title of the post.
     *
     * @return string The title of the post.
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * Get the tags associated with the post.
     *
     * @return string The tags associated with the post.
     */
    public function getTags()
    {
        return $this->tags;
    }


    /**
     * Get the list of media associated with the post.
     *
     * @return array The list of media associated with the post.
     */
    public function getMediaList()
    {
        return $this->mediaList;
    }
}
