<?php

declare(strict_types=1);

namespace Serafim\SDL\Mixer;

interface MusicType
{
    public const MUS_NONE = 0;
    public const MUS_CMD = 1;
    public const MUS_WAV = 2;
    public const MUS_MOD = 3;
    public const MUS_MID = 4;
    public const MUS_OGG = 5;
    public const MUS_MP3 = 6;
    public const MUS_MP3_MAD_UNUSED = 7;
    public const MUS_FLAC = 8;
    public const MUS_MODPLUG_UNUSED = 9;
    public const MUS_OPUS = 10;
}
