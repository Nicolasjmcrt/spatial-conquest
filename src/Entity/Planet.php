<?php

namespace App\Entity;

use App\Repository\PlanetRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlanetRepository::class)]
class Planet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $intro = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;

    #[ORM\Column(length: 255)]
    private ?string $factName1 = null;

    #[ORM\Column(length: 255)]
    private ?string $factName2 = null;

    #[ORM\Column(length: 255)]
    private ?string $factName3 = null;

    #[ORM\Column(length: 255)]
    private ?string $factName4 = null;

    #[ORM\Column(length: 255)]
    private ?string $factName5 = null;

    #[ORM\Column(length: 255)]
    private ?string $factName6 = null;

    #[ORM\Column(length: 255)]
    private ?string $factName7 = null;

    #[ORM\Column(length: 255)]
    private ?string $factName8 = null;

    #[ORM\Column(length: 255)]
    private ?string $factName9 = null;

    #[ORM\Column(length: 255)]
    private ?string $factName10 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $factText1 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $factText2 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $factText3 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $factText4 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $factText5 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $factText6 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $factText7 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $factText8 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $factText9 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $factText10 = null;

    #[ORM\Column(length: 255)]
    private ?string $heroImg = null;

    #[ORM\Column(length: 255)]
    private ?string $planetImg1 = null;

    #[ORM\Column(length: 255)]
    private ?string $planetImg2 = null;

    #[ORM\Column(length: 255)]
    private ?string $planetImg3 = null;

    #[ORM\Column(length: 255)]
    private ?string $planetImg4 = null;

    #[ORM\Column(length: 255)]
    private ?string $planetImg5 = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column(length: 255)]
    private ?string $planetType = null;

    #[ORM\Column(length: 255)]
    private ?string $lengthOfYear = null;

    #[ORM\Column(length: 255)]
    private ?string $imgCaption1 = null;

    #[ORM\Column(length: 255)]
    private ?string $imgCaption2 = null;

    #[ORM\Column(length: 255)]
    private ?string $imgCaption3 = null;

    #[ORM\Column(length: 255)]
    private ?string $imgCaption4 = null;

    #[ORM\Column(length: 255)]
    private ?string $imgCaption5 = null;

    #[ORM\Column(length: 255)]
    private ?string $planetImg6 = null;

    #[ORM\Column(length: 255)]
    private ?string $imgCaption6 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getIntro(): ?string
    {
        return $this->intro;
    }

    public function setIntro(string $intro): static
    {
        $this->intro = $intro;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getFactName1(): ?string
    {
        return $this->factName1;
    }

    public function setFactName1(string $factName1): static
    {
        $this->factName1 = $factName1;

        return $this;
    }

    public function getFactName2(): ?string
    {
        return $this->factName2;
    }

    public function setFactName2(string $factName2): static
    {
        $this->factName2 = $factName2;

        return $this;
    }

    public function getFactName3(): ?string
    {
        return $this->factName3;
    }

    public function setFactName3(string $factName3): static
    {
        $this->factName3 = $factName3;

        return $this;
    }

    public function getFactName4(): ?string
    {
        return $this->factName4;
    }

    public function setFactName4(string $factName4): static
    {
        $this->factName4 = $factName4;

        return $this;
    }

    public function getFactName5(): ?string
    {
        return $this->factName5;
    }

    public function setFactName5(string $factName5): static
    {
        $this->factName5 = $factName5;

        return $this;
    }

    public function getFactName6(): ?string
    {
        return $this->factName6;
    }

    public function setFactName6(string $factName6): static
    {
        $this->factName6 = $factName6;

        return $this;
    }

    public function getFactName7(): ?string
    {
        return $this->factName7;
    }

    public function setFactName7(string $factName7): static
    {
        $this->factName7 = $factName7;

        return $this;
    }

    public function getFactName8(): ?string
    {
        return $this->factName8;
    }

    public function setFactName8(string $factName8): static
    {
        $this->factName8 = $factName8;

        return $this;
    }

    public function getFactName9(): ?string
    {
        return $this->factName9;
    }

    public function setFactName9(string $factName9): static
    {
        $this->factName9 = $factName9;

        return $this;
    }

    public function getFactName10(): ?string
    {
        return $this->factName10;
    }

    public function setFactName10(string $factName10): static
    {
        $this->factName10 = $factName10;

        return $this;
    }

    public function getFactText1(): ?string
    {
        return $this->factText1;
    }

    public function setFactText1(string $factText1): static
    {
        $this->factText1 = $factText1;

        return $this;
    }

    public function getFactText2(): ?string
    {
        return $this->factText2;
    }

    public function setFactText2(string $factText2): static
    {
        $this->factText2 = $factText2;

        return $this;
    }

    public function getFactText3(): ?string
    {
        return $this->factText3;
    }

    public function setFactText3(string $factText3): static
    {
        $this->factText3 = $factText3;

        return $this;
    }

    public function getFactText4(): ?string
    {
        return $this->factText4;
    }

    public function setFactText4(string $factText4): static
    {
        $this->factText4 = $factText4;

        return $this;
    }

    public function getFactText5(): ?string
    {
        return $this->factText5;
    }

    public function setFactText5(string $factText5): static
    {
        $this->factText5 = $factText5;

        return $this;
    }

    public function getFactText6(): ?string
    {
        return $this->factText6;
    }

    public function setFactText6(string $factText6): static
    {
        $this->factText6 = $factText6;

        return $this;
    }

    public function getFactText7(): ?string
    {
        return $this->factText7;
    }

    public function setFactText7(string $factText7): static
    {
        $this->factText7 = $factText7;

        return $this;
    }

    public function getFactText8(): ?string
    {
        return $this->factText8;
    }

    public function setFactText8(string $factText8): static
    {
        $this->factText8 = $factText8;

        return $this;
    }

    public function getFactText9(): ?string
    {
        return $this->factText9;
    }

    public function setFactText9(string $factText9): static
    {
        $this->factText9 = $factText9;

        return $this;
    }

    public function getFactText10(): ?string
    {
        return $this->factText10;
    }

    public function setFactText10(string $factText10): static
    {
        $this->factText10 = $factText10;

        return $this;
    }

    public function getHeroImg(): ?string
    {
        return $this->heroImg;
    }

    public function setHeroImg(string $heroImg): static
    {
        $this->heroImg = $heroImg;

        return $this;
    }

    public function getPlanetImg1(): ?string
    {
        return $this->planetImg1;
    }

    public function setPlanetImg1(string $planetImg1): static
    {
        $this->planetImg1 = $planetImg1;

        return $this;
    }

    public function getPlanetImg2(): ?string
    {
        return $this->planetImg2;
    }

    public function setPlanetImg2(string $planetImg2): static
    {
        $this->planetImg2 = $planetImg2;

        return $this;
    }

    public function getPlanetImg3(): ?string
    {
        return $this->planetImg3;
    }

    public function setPlanetImg3(string $planetImg3): static
    {
        $this->planetImg3 = $planetImg3;

        return $this;
    }

    public function getPlanetImg4(): ?string
    {
        return $this->planetImg4;
    }

    public function setPlanetImg4(string $planetImg4): static
    {
        $this->planetImg4 = $planetImg4;

        return $this;
    }

    public function getPlanetImg5(): ?string
    {
        return $this->planetImg5;
    }

    public function setPlanetImg5(string $planetImg5): static
    {
        $this->planetImg5 = $planetImg5;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getPlanetType(): ?string
    {
        return $this->planetType;
    }

    public function setPlanetType(string $planetType): static
    {
        $this->planetType = $planetType;

        return $this;
    }

    public function getLengthOfYear(): ?string
    {
        return $this->lengthOfYear;
    }

    public function setLengthOfYear(string $lengthOfYear): static
    {
        $this->lengthOfYear = $lengthOfYear;

        return $this;
    }

    public function getImgCaption1(): ?string
    {
        return $this->imgCaption1;
    }

    public function setImgCaption1(string $imgCaption1): static
    {
        $this->imgCaption1 = $imgCaption1;

        return $this;
    }

    public function getImgCaption2(): ?string
    {
        return $this->imgCaption2;
    }

    public function setImgCaption2(string $imgCaption2): static
    {
        $this->imgCaption2 = $imgCaption2;

        return $this;
    }

    public function getImgCaption3(): ?string
    {
        return $this->imgCaption3;
    }

    public function setImgCaption3(string $imgCaption3): static
    {
        $this->imgCaption3 = $imgCaption3;

        return $this;
    }

    public function getImgCaption4(): ?string
    {
        return $this->imgCaption4;
    }

    public function setImgCaption4(string $imgCaption4): static
    {
        $this->imgCaption4 = $imgCaption4;

        return $this;
    }

    public function getImgCaption5(): ?string
    {
        return $this->imgCaption5;
    }

    public function setImgCaption5(string $imgCaption5): static
    {
        $this->imgCaption5 = $imgCaption5;

        return $this;
    }

    public function getPlanetImg6(): ?string
    {
        return $this->planetImg6;
    }

    public function setPlanetImg6(string $planetImg6): static
    {
        $this->planetImg6 = $planetImg6;

        return $this;
    }

    public function getImgCaption6(): ?string
    {
        return $this->imgCaption6;
    }

    public function setImgCaption6(string $imgCaption6): static
    {
        $this->imgCaption6 = $imgCaption6;

        return $this;
    }
}
