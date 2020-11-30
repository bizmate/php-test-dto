<?php
/**
 *
 */

namespace Bizmate\PhpTestDto\Reviews;

/**
 * Class Review
 * @package Bizmate\PhpTestDto\Reviews
 */
final class Review
{
    /**
     * @var float
     */
    private $rating;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $reviewer;

    /**
     * @var \DateTime
     */
    private $dateTime;

    /**
     * Review constructor.
     * @param float $rating
     * @param string $description
     * @param string $url
     * @param string $reviewer
     * @param \DateTime $dateTime
     */
    public function __construct(
        float $rating,
        string $description,
        string $url,
        string $reviewer,
        \DateTime $dateTime
    ) {
        $this->rating = $rating;
        $this->description = $description;
        $this->url = $url;
        $this->reviewer = $reviewer;
        $this->dateTime = $dateTime;
    }

    /**
     * @return float
     */
    public function getRating(): float
    {
        return $this->rating;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getReviewer(): string
    {
        return $this->reviewer;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime(): \DateTime
    {
        return $this->dateTime;
    }
}
