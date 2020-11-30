<?php
/**
 *
 */
namespace Bizmate\PhpTestDto\Reviews;

/**
 * Interface ReviewsFetchInterface
 * @package Bizmate\PhpTestDto\Reviews
 */
interface ReviewsFetchInterface
{
    /**
     * Implementers will return a review list.
     *
     * @param mixed $identifier provides a generic variable that can be passed to the Adapter to fetch the ReviewList.
     * @return ReviewList
     */
    public function getReviewList($identifier) : ReviewList;
}
