<?php

namespace App\Entity;

use App\Repository\CrmVisitDetailsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CrmVisitDetailsRepository::class)
 */
class CrmVisitDetails
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $comments;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $farm_capacity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $purpose;

    /**
     * @ORM\Column(type="date")
     */
    private $created;

    /**
     * @ORM\Column(type="date")
     */
    private $updated;

    /**
     * @ORM\ManyToOne(targetEntity=CrmVisit::class, inversedBy="crm_visit_details")
     */
    private $crm_visit_id;

    /**
     * @ORM\ManyToOne(targetEntity=CrmCustomer::class, inversedBy="crm_visit_details")
     */
    private $customer;

    /**
     * @ORM\Column(type="string", length=255)
     */


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getFarmCapacity(): ?string
    {
        return $this->farm_capacity;
    }

    public function setFarmCapacity(?string $farm_capacity): self
    {
        $this->farm_capacity = $farm_capacity;

        return $this;
    }

    public function getPurpose(): ?string
    {
        return $this->purpose;
    }

    public function setPurpose(?string $purpose): self
    {
        $this->purpose = $purpose;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getUpdated(): ?\DateTimeInterface
    {
        return $this->updated;
    }

    public function setUpdated(\DateTimeInterface $updated): self
    {
        $this->updated = $updated;

        return $this;
    }

    public function getCrmVisitId(): ?CrmVisit
    {
        return $this->crm_visit_id;
    }

    public function setCrmVisitId(?CrmVisit $crm_visit_id): self
    {
        $this->crm_visit_id = $crm_visit_id;

        return $this;
    }

    public function getCustomer(): ?CrmCustomer
    {
        return $this->customer;
    }

    public function setCustomer(?CrmCustomer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    
}
