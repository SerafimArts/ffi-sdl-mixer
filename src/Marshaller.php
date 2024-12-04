<?php

declare(strict_types=1);

namespace Serafim\SDL\Mixer;

use FFI\CData;

/**
 * @internal this is an internal library trait, please do not use it in your code
 * @psalm-internal Serafim\SDL\Mixer
 *
 * @mixin Mixer
 *
 * @property-read object $ffi
 */
trait Marshaller
{
    public function Mix_Linked_Version(): ?CData
    {
        $result = $this->ffi->Mix_Linked_Version();

        return $result !== null ? $this->sdl->cast('SDL_version*', $result) : null;
    }

    public function Mix_Init(int $flags): int
    {
        $this->useMixerBinariesDirectory();

        return $this->ffi->Mix_Init($flags);
    }

    public function Mix_LoadWAV_RW(?CData $src, int $freesrc): ?CData
    {
        return $this->ffi->Mix_LoadWAV_RW(
            $src === null ? null : $this->cast('SDL_RWops*', $src),
            $freesrc,
        );
    }

    public function Mix_LoadMUS_RW(?CData $src, int $freesrc): ?CData
    {
        return $this->ffi->Mix_LoadMUS_RW(
            $src === null ? null : $this->cast('SDL_RWops*', $src),
            $freesrc,
        );
    }

    public function Mix_LoadMUSType_RW(?CData $src, int $type, int $freesrc): ?CData
    {
        return $this->ffi->Mix_LoadMUS_RW(
            $src === null ? null : $this->cast('SDL_RWops*', $src),
            $type,
            $freesrc,
        );
    }
}
