<?php

namespace App\Entity;

use App\Repository\CrmVisitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CrmVisitRepository::class)
 */
class CrmVisit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cso_id;

    /**
     * @ORM\OneToMany(targetEntity=CrmVisitDetails::class, mappedBy="crm_visit_id")
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

    public function getCsoId(): ?int
    {
        return $this->cso_id;
    }

    public function setCsoId(?int $cso_id): self
    {
        $this->cso_id = $cso_id;

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
            $crmVisitDetail->setCrmVisitId($this);
        }

        return $this;
    }

    public function removeCrmVisitDetail(CrmVisitDetails $crmVisitDetail): self
    {
        if ($this->crm_visit_details->contains($crmVisitDetail)) {
            $this->crm_visit_details->removeElement($crmVisitDetail);
            // set the owning side to null (unless already changed)
            if ($crmVisitDetail->getCrmVisitId() === $this) {
                $crmVisitDetail->setCrmVisitId(null);
            }
        }

        return $this;
    }
}
