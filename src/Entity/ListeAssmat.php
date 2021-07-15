<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ListeAssmatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ListeAssmatRepository::class)
 */
class ListeAssmat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="array")
     */
    private $assMats = [];

    public function __construct()
    {
        $this->assMats = [];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAssMats(): ?array
    {
        return $this->assMats;
    }

    public function ajoutAssMat(AssMat $assMat) : void
    {
        $this->assMats[] = $assMat;
    }
}
