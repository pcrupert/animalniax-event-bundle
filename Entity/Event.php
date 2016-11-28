<?php

namespace Animalniax\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="event")
 */
class Event
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", name="title", nullable=false)
     */
    protected $title;

    /**
     * @ORM\Column(type="string", name="contact", nullable=true)
     */
    protected $contact;

    /**
     * @ORM\Column(type="text", name="description", nullable=true)
     */
    protected $description;

    /**
     * @ORM\Column(type="date", name="date_from", nullable=false)
     */
    protected $dateFrom;

    /**
     * @ORM\Column(type="date", name="date_to", nullable=true)
     */
    protected $dateTo;

    /**
     * @ORM\Column(type="string", name="code_type", nullable=false)
     */
    protected $codeType;

    /**
     * @ORM\Column(type="string", name="event_type", nullable=false)
     */
    protected $type;

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of Title
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of Title
     *
     * @param mixed title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of Contact
     *
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set the value of Contact
     *
     * @param mixed contact
     *
     * @return self
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get the value of Description
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of Description
     *
     * @param mixed description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of Date From
     *
     * @return mixed
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set the value of Date From
     *
     * @param mixed dateFrom
     *
     * @return self
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Get the value of Date To
     *
     * @return mixed
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Set the value of Date To
     *
     * @param mixed dateTo
     *
     * @return self
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Get the value of Code
     *
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of Code
     *
     * @param mixed code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of Code Type
     *
     * @return mixed
     */
    public function getCodeType()
    {
        return $this->codeType;
    }

    /**
     * Set the value of Code Type
     *
     * @param mixed codeType
     *
     * @return self
     */
    public function setCodeType($codeType)
    {
        $this->codeType = $codeType;

        return $this;
    }

    /**
     * Get the value of Type
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of Type
     *
     * @param mixed type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

}
