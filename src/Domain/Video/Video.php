<?php

namespace Miguel\Calisthenics\Domain\Video;

class Video
{
    private bool $visible = false;
    private int $ageLimit;

    public function publish(): void
    {
        $this->visible = true;
    }

    public function isPublic(): bool
    {
        return $this->visible;
    }

    public function checkIfVisibilityIsValidAndUpdateIt(int $visibility): void
    {
        if (!in_array($visibility, [false, true])) {
            throw new \InvalidArgumentException('Invalid visibility');
        }
        
        $this->visibility = $visibility;
    }

    public function getAgeLimit(): int
    {
        return $this->ageLimit;
    }

    public function setAgeLimit(int $ageLimit): void
    {
        $this->ageLimit = $ageLimit;
    }
}
