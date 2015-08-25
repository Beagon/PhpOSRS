<?php

/**
 * File: PhpOSRS/lib/PhpOSRS/Skill.php
 * Author: Robin Rijkeboer <rmrijkeboer@gmail.com>
 */

namespace PhpOSRS;

class Skill
{
    /**
     * @var int
     */
    protected $rank;

    /**
     * @var int
     */
    protected $experience;

    /**
     * @var int
     */
    protected $level;

    /**
     * Gets the value of rank.
     *
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Sets the value of rank.
     *
     * @param int $rank the rank
     *
     * @return self
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Gets the value of level.
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Sets the value of level.
     *
     * @param int $level the level
     *
     * @return self
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Gets the value of experience.
     *
     * @return int
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Sets the value of experience.
     *
     * @param int $experience the experience
     *
     * @return self
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }
}
