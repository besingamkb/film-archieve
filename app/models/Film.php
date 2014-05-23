<?php

class Film extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $film_id;

    /**
     *
     * @var string
     */
    public $title;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var string
     */
    public $release_year;

    /**
     *
     * @var integer
     */
    public $language_id;

    /**
     *
     * @var integer
     */
    public $original_language_id;

    /**
     *
     * @var integer
     */
    public $rental_duration;

    /**
     *
     * @var double
     */
    public $rental_rate;

    /**
     *
     * @var integer
     */
    public $length;

    /**
     *
     * @var double
     */
    public $replacement_cost;

    /**
     *
     * @var string
     */
    public $rating;

    /**
     *
     * @var string
     */
    public $special_features;

    /**
     *
     * @var string
     */
    public $last_update;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'film_id' => 'film_id', 
            'title' => 'title', 
            'description' => 'description', 
            'release_year' => 'release_year', 
            'language_id' => 'language_id', 
            'original_language_id' => 'original_language_id', 
            'rental_duration' => 'rental_duration', 
            'rental_rate' => 'rental_rate', 
            'length' => 'length', 
            'replacement_cost' => 'replacement_cost', 
            'rating' => 'rating', 
            'special_features' => 'special_features', 
            'last_update' => 'last_update'
        );
    }

}
