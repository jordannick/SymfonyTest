<?php

namespace AppBundle\Entity;

/**
 * Created by PhpStorm.
 * User: jordan_n
 * Date: 9/22/2015
 * Time: 1:11 PM
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="util_meter_read")
 */
class MeterRead
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $date;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $rate;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $kilowatts;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return MeterRead
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set rate
     *
     * @param string $rate
     *
     * @return MeterRead
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    
        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set kilowatts
     *
     * @param string $kilowatts
     *
     * @return MeterRead
     */
    public function setKilowatts($kilowatts)
    {
        $this->kilowatts = $kilowatts;
    
        return $this;
    }

    /**
     * Get kilowatts
     *
     * @return string
     */
    public function getKilowatts()
    {
        return $this->kilowatts;
    }

}
