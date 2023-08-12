<?php

declare(strict_types=1);

namespace Serafim\SDL\Mixer;

interface Fading
{
    public const MIX_NO_FADING = 0;
    public const MIX_FADING_OUT = 1;
    public const MIX_FADING_IN = 2;
}
