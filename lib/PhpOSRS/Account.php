<?php

/**
 * File: PhpOSRS/lib/PhpOSRS/Account.php
 * Author: Robin Rijkeboer <rmrijkeboer@gmail.com>
 */

namespace PhpOSRS;

class Account
{
    /**
     * @var string
     */
    protected $name;

    /**
    * @var PhpOSRS\Skill
    */
    protected $total;

    /**
    * @var PhpOSRS\Skill
    */
    protected $attack;

    /**
    * @var PhpOSRS\Skill
    */
    protected $defence;

    /**
    * @var PhpOSRS\Skill
    */
    protected $strength;

    /**
    * @var PhpOSRS\Skill
    */
    protected $hitpoints;

    /**
    * @var PhpOSRS\Skill
    */
    protected $ranged;

    /**
    * @var PhpOSRS\Skill
    */
    protected $prayer;

    /**
    * @var PhpOSRS\Skill
    */
    protected $magic;

    /**
    * @var PhpOSRS\Skill
    */
    protected $cooking;

    /**
    * @var PhpOSRS\Skill
    */
    protected $woodcutting;

    /**
    * @var PhpOSRS\Skill
    */
    protected $fletching;

    /**
    * @var PhpOSRS\Skill
    */
    protected $fishing;

    /**
    * @var PhpOSRS\Skill
    */
    protected $firemaking;

    /**
    * @var PhpOSRS\Skill
    */
    protected $crafting;

    /**
    * @var PhpOSRS\Skill
    */
    protected $smithing;

    /**
    * @var PhpOSRS\Skill
    */
    protected $mining;

    /**
    * @var PhpOSRS\Skill
    */
    protected $herblore;

    /**
    * @var PhpOSRS\Skill
    */
    protected $agility;

    /**
    * @var PhpOSRS\Skill
    */
    protected $thieving;

    /**
    * @var PhpOSRS\Skill
    */
    protected $slayer;

    /**
    * @var PhpOSRS\Skill
    */
    protected $farming;

    /**
    * @var PhpOSRS\Skill
    */
    protected $runecraft;

    /**
    * @var PhpOSRS\Skill
    */
    protected $hunter;

    /**
    * @var PhpOSRS\Skill
    */
    protected $construction;

    /**
     * Initialize the class
     * @param string $name The name of your account/character.
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Gets the value of name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param string $name the name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of total.
     *
     * @return PhpOSRS\Skill
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets the value of total.
     *
     * @param PhpOSRS\Skill $total the total
     *
     * @return self
     */
    public function setTotal(Skill $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Gets the value of attack.
     *
     * @return PhpOSRS\Skill
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Sets the value of attack.
     *
     * @param PhpOSRS\Skill $attack the attack
     *
     * @return self
     */
    public function setAttack(Skill $attack)
    {
        $this->attack = $attack;

        return $this;
    }

    /**
     * Gets the value of defence.
     *
     * @return PhpOSRS\Skill
     */
    public function getDefence()
    {
        return $this->defence;
    }

    /**
     * Sets the value of defence.
     *
     * @param PhpOSRS\Skill $defence the defence
     *
     * @return self
     */
    public function setDefence(Skill $defence)
    {
        $this->defence = $defence;

        return $this;
    }

    /**
     * Gets the value of strength.
     *
     * @return PhpOSRS\Skill
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Sets the value of strength.
     *
     * @param PhpOSRS\Skill $strength the strength
     *
     * @return self
     */
    public function setStrength(Skill $strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Gets the value of hitpoints.
     *
     * @return PhpOSRS\Skill
     */
    public function getHitpoints()
    {
        return $this->hitpoints;
    }

    /**
     * Sets the value of hitpoints.
     *
     * @param PhpOSRS\Skill $hitpoints the hitpoints
     *
     * @return self
     */
    public function setHitpoints(Skill $hitpoints)
    {
        $this->hitpoints = $hitpoints;

        return $this;
    }

    /**
     * Gets the value of ranged.
     *
     * @return PhpOSRS\Skill
     */
    public function getRanged()
    {
        return $this->ranged;
    }

    /**
     * Sets the value of ranged.
     *
     * @param PhpOSRS\Skill $ranged the ranged
     *
     * @return self
     */
    public function setRanged(Skill $ranged)
    {
        $this->ranged = $ranged;

        return $this;
    }

    /**
     * Gets the value of prayer.
     *
     * @return PhpOSRS\Skill
     */
    public function getPrayer()
    {
        return $this->prayer;
    }

    /**
     * Sets the value of prayer.
     *
     * @param PhpOSRS\Skill $prayer the prayer
     *
     * @return self
     */
    public function setPrayer(Skill $prayer)
    {
        $this->prayer = $prayer;

        return $this;
    }

    /**
     * Gets the value of magic.
     *
     * @return PhpOSRS\Skill
     */
    public function getMagic()
    {
        return $this->magic;
    }

    /**
     * Sets the value of magic.
     *
     * @param PhpOSRS\Skill $magic the magic
     *
     * @return self
     */
    public function setMagic(Skill $magic)
    {
        $this->magic = $magic;

        return $this;
    }

    /**
     * Gets the value of cooking.
     *
     * @return PhpOSRS\Skill
     */
    public function getCooking()
    {
        return $this->cooking;
    }

    /**
     * Sets the value of cooking.
     *
     * @param PhpOSRS\Skill $cooking the cooking
     *
     * @return self
     */
    public function setCooking(Skill $cooking)
    {
        $this->cooking = $cooking;

        return $this;
    }

    /**
     * Gets the value of woodcutting.
     *
     * @return PhpOSRS\Skill
     */
    public function getWoodcutting()
    {
        return $this->woodcutting;
    }

    /**
     * Sets the value of woodcutting.
     *
     * @param PhpOSRS\Skill $woodcutting the woodcutting
     *
     * @return self
     */
    public function setWoodcutting(Skill $woodcutting)
    {
        $this->woodcutting = $woodcutting;

        return $this;
    }

    /**
     * Gets the value of fletching.
     *
     * @return PhpOSRS\Skill
     */
    public function getFletching()
    {
        return $this->fletching;
    }

    /**
     * Sets the value of fletching.
     *
     * @param PhpOSRS\Skill $fletching the fletching
     *
     * @return self
     */
    public function setFletching(Skill $fletching)
    {
        $this->fletching = $fletching;

        return $this;
    }

    /**
     * Gets the value of fishing.
     *
     * @return PhpOSRS\Skill
     */
    public function getFishing()
    {
        return $this->fishing;
    }

    /**
     * Sets the value of fishing.
     *
     * @param PhpOSRS\Skill $fishing the fishing
     *
     * @return self
     */
    public function setFishing(Skill $fishing)
    {
        $this->fishing = $fishing;

        return $this;
    }

    /**
     * Gets the value of firemaking.
     *
     * @return PhpOSRS\Skill
     */
    public function getFiremaking()
    {
        return $this->firemaking;
    }

    /**
     * Sets the value of firemaking.
     *
     * @param PhpOSRS\Skill $firemaking the firemaking
     *
     * @return self
     */
    public function setFiremaking(Skill $firemaking)
    {
        $this->firemaking = $firemaking;

        return $this;
    }

    /**
     * Gets the value of crafting.
     *
     * @return PhpOSRS\Skill
     */
    public function getCrafting()
    {
        return $this->crafting;
    }

    /**
     * Sets the value of crafting.
     *
     * @param PhpOSRS\Skill $crafting the crafting
     *
     * @return self
     */
    public function setCrafting(Skill $crafting)
    {
        $this->crafting = $crafting;

        return $this;
    }

    /**
     * Gets the value of smithing.
     *
     * @return PhpOSRS\Skill
     */
    public function getSmithing()
    {
        return $this->smithing;
    }

    /**
     * Sets the value of smithing.
     *
     * @param PhpOSRS\Skill $smithing the smithing
     *
     * @return self
     */
    public function setSmithing(Skill $smithing)
    {
        $this->smithing = $smithing;

        return $this;
    }

    /**
     * Gets the value of mining.
     *
     * @return PhpOSRS\Skill
     */
    public function getMining()
    {
        return $this->mining;
    }

    /**
     * Sets the value of mining.
     *
     * @param PhpOSRS\Skill $mining the mining
     *
     * @return self
     */
    public function setMining(Skill $mining)
    {
        $this->mining = $mining;

        return $this;
    }

    /**
     * Gets the value of herblore.
     *
     * @return PhpOSRS\Skill
     */
    public function getHerblore()
    {
        return $this->herblore;
    }

    /**
     * Sets the value of herblore.
     *
     * @param PhpOSRS\Skill $herblore the herblore
     *
     * @return self
     */
    public function setHerblore(Skill $herblore)
    {
        $this->herblore = $herblore;

        return $this;
    }

    /**
     * Gets the value of agility.
     *
     * @return PhpOSRS\Skill
     */
    public function getAgility()
    {
        return $this->agility;
    }

    /**
     * Sets the value of agility.
     *
     * @param PhpOSRS\Skill $agility the agility
     *
     * @return self
     */
    public function setAgility(Skill $agility)
    {
        $this->agility = $agility;

        return $this;
    }

    /**
     * Gets the value of thieving.
     *
     * @return PhpOSRS\Skill
     */
    public function getThieving()
    {
        return $this->thieving;
    }

    /**
     * Sets the value of thieving.
     *
     * @param PhpOSRS\Skill $thieving the thieving
     *
     * @return self
     */
    public function setThieving(Skill $thieving)
    {
        $this->thieving = $thieving;

        return $this;
    }

    /**
     * Gets the value of slayer.
     *
     * @return PhpOSRS\Skill
     */
    public function getSlayer()
    {
        return $this->slayer;
    }

    /**
     * Sets the value of slayer.
     *
     * @param PhpOSRS\Skill $slayer the slayer
     *
     * @return self
     */
    public function setSlayer(Skill $slayer)
    {
        $this->slayer = $slayer;

        return $this;
    }

    /**
     * Gets the value of farming.
     *
     * @return PhpOSRS\Skill
     */
    public function getFarming()
    {
        return $this->farming;
    }

    /**
     * Sets the value of farming.
     *
     * @param PhpOSRS\Skill $farming the farming
     *
     * @return self
     */
    public function setFarming(Skill $farming)
    {
        $this->farming = $farming;

        return $this;
    }

    /**
     * Gets the value of runecraft.
     *
     * @return PhpOSRS\Skill
     */
    public function getRunecraft()
    {
        return $this->runecraft;
    }

    /**
     * Sets the value of runecraft.
     *
     * @param PhpOSRS\Skill $runecraft the runecraft
     *
     * @return self
     */
    public function setRunecraft(Skill $runecraft)
    {
        $this->runecraft = $runecraft;

        return $this;
    }

    /**
     * Gets the value of hunter.
     *
     * @return PhpOSRS\Skill
     */
    public function getHunter()
    {
        return $this->hunter;
    }

    /**
     * Sets the value of hunter.
     *
     * @param PhpOSRS\Skill $hunter the hunter
     *
     * @return self
     */
    public function setHunter(Skill $hunter)
    {
        $this->hunter = $hunter;

        return $this;
    }

    /**
     * Gets the value of construction.
     *
     * @return PhpOSRS\Skill
     */
    public function getConstruction()
    {
        return $this->construction;
    }

    /**
     * Sets the value of construction.
     *
     * @param PhpOSRS\Skill $construction the construction
     *
     * @return self
     */
    public function setConstruction(Skill $construction)
    {
        $this->construction = $construction;

        return $this;
    }
}
