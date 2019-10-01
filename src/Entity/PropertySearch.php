<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

class PropertySearch
{

    private $maxPrice;

    /**
     * @Assert\Range(min=10, max=400)
     */
    private $minSurface;


    private $options;


    public function __construct()
    {
        $this->options = new ArrayCollection();
    }

    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }
    public function getMinSurface(): ?int
    {
        return $this->minSurface;
    }
    public function setMaxPrice(int $maxPrice): ?int
    {
        return $this->maxPrice = $maxPrice;
        return $this;
    }
    public function setMinSurface(int $minSurface): ?int
    {
        return $this->minSurface = $minSurface;
        return $this;
    }


    public function getOptions(): ArrayCollection
    {
        return $this->options;
    }


    public function setOptions(ArrayCollection $options): void
    {
        $this->options = $options;
    }
}
