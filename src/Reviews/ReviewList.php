<?php
/**
 *
 */

namespace Bizmate\PhpTestDto\Reviews;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class ReviewList
 * @package Bizmate\PhpTestDto\Reviews
 */
class ReviewList
{
    /**
     * @var ArrayCollection
     */
    private $reviewList;

    /**
     * ReviewList constructor.
     */
    public function __construct()
    {
        $this->reviewList = new ArrayCollection();
    }

    /**
     * @param Review $review
     */
    public function addReview(Review $review)
    {
        $this->reviewList->add($review);
    }

    /**
     * @param Review $review
     */
    public function removeReview(Review $review)
    {
        $this->reviewList->removeElement($review);
    }

    /**
     * @return ArrayCollection
     */
    public function getReviewList()
    {
        return $this->reviewList;
    }
}
