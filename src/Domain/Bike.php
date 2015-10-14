<?php

namespace Cycloo\Domain;

class Bike 
{
    /**
     * Bike id.
     *
     * @var integer
     */
    private $id;

    /**
     * Bike name.
     *
     * @var string
     */
    private $name;

    /**
     * bike description.
     *
     * @var string
     */
    private $description;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->name;
    }

    public function setTitle($name) {
        $this->name = $name;
    }

    public function getContent() {
        return $this->description;
    }

    public function setContent($description) {
        $this->description = $description;
    }
}