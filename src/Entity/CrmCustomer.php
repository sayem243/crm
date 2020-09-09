<?php

namespace App\Entity;

use App\Repository\CrmCustomerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CrmCustomerRepository::class)
 */
class CrmCustomer
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mobile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $customer_group;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $agentId;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sub_agent_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @ORM\OneToMany(targetEntity=CrmVisitDetails::class, mappedBy="customer")
     */
    private $crm_visit_details;

    public function __construct()
    {
        $this->crm_visit_details = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCustomerGroup(): ?string
    {
        return $this->customer_group;
    }

    public function setCustomerGroup(?string $customer_group): self
    {
        $this->customer_group = $customer_group;

        return $this;
    }

    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;

        return $this;
    }

    public function getSubAgentId(): ?int
    {
        return $this->sub_agent_id;
    }

    public function setSubAgentId(?int $sub_agent_id): self
    {
        $this->sub_agent_id = $sub_agent_id;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return Collection|CrmVisitDetails[]
     */
    public function getCrmVisitDetails(): Collection
    {
        return $this->crm_visit_details;
    }

    public function addCrmVisitDetail(CrmVisitDetails $crmVisitDetail): self
    {
        if (!$this->crm_visit_details->contains($crmVisitDetail)) {
            $this->crm_visit_details[] = $crmVisitDetail;
            $crmVisitDetail->setCustomer($this);
        }

        return $this;
    }

    public function removeCrmVisitDetail(CrmVisitDetails $crmVisitDetail): self
    {
        if ($this->crm_visit_details->contains($crmVisitDetail)) {
            $this->crm_visit_details->removeElement($crmVisitDetail);
            // set the owning side to null (unless already changed)
            if ($crmVisitDetail->getCustomer() === $this) {
                $crmVisitDetail->setCustomer(null);
            }
        }

        return $this;
    }
}
