<?php

declare(strict_types=1);

namespace PHPSTORM_META {

    registerArgumentsSet(
        // ffi_sdl_mixer_mix_initflags
        'ffi_sdl_mixer_mix_initflags',
        \Serafim\SDL\Mixer\InitFlags::MIX_INIT_FLAC,
        \Serafim\SDL\Mixer\InitFlags::MIX_INIT_MOD,
        \Serafim\SDL\Mixer\InitFlags::MIX_INIT_MP3,
        \Serafim\SDL\Mixer\InitFlags::MIX_INIT_OGG,
        \Serafim\SDL\Mixer\InitFlags::MIX_INIT_MID,
        \Serafim\SDL\Mixer\InitFlags::MIX_INIT_OPUS
    );

    expectedArguments(\Serafim\SDL\Mixer\Mixer::Mix_Init(), 0, argumentsSet('ffi_sdl_mixer_mix_initflags'));

}
