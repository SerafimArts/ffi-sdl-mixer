<?php

declare(strict_types=1);

namespace Serafim\SDL\Mixer;

interface InitFlags
{
    public const MIX_INIT_FLAC = 0x00000001;
    public const MIX_INIT_MOD = 0x00000002;
    public const MIX_INIT_MP3 = 0x00000008;
    public const MIX_INIT_OGG = 0x00000010;
    public const MIX_INIT_MID = 0x00000020;
    public const MIX_INIT_OPUS = 0x00000040;
}
