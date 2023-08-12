<?php

declare(strict_types=1);

namespace PHPSTORM_META {

    registerArgumentsSet('ffi_sdl_mixer_mix_initflags',
        \Serafim\SDL\Mixer\InitFlags::MIX_INIT_FLAC,
        \Serafim\SDL\Mixer\InitFlags::MIX_INIT_MOD,
        \Serafim\SDL\Mixer\InitFlags::MIX_INIT_MP3,
        \Serafim\SDL\Mixer\InitFlags::MIX_INIT_OGG,
        \Serafim\SDL\Mixer\InitFlags::MIX_INIT_MID,
        \Serafim\SDL\Mixer\InitFlags::MIX_INIT_OPUS
    );

    registerArgumentsSet('ffi_sdl_mixer_audio_format',
        \Serafim\SDL\Audio\Format::AUDIO_U8,
        \Serafim\SDL\Audio\Format::AUDIO_S8,
        \Serafim\SDL\Audio\Format::AUDIO_U16LSB,
        \Serafim\SDL\Audio\Format::AUDIO_S16LSB,
        \Serafim\SDL\Audio\Format::AUDIO_U16MSB,
        \Serafim\SDL\Audio\Format::AUDIO_S16MSB,
        \Serafim\SDL\Audio\Format::AUDIO_U16,
        \Serafim\SDL\Audio\Format::AUDIO_S16,
        \Serafim\SDL\Audio\Format::AUDIO_S32LSB,
        \Serafim\SDL\Audio\Format::AUDIO_S32MSB,
        \Serafim\SDL\Audio\Format::AUDIO_F32LSB,
        \Serafim\SDL\Audio\Format::AUDIO_S32,
        \Serafim\SDL\Audio\Format::AUDIO_F32MSB,
        \Serafim\SDL\Audio\Format::AUDIO_F32,
        \Serafim\SDL\Audio\Format::AUDIO_U16SYS,
        \Serafim\SDL\Audio\Format::AUDIO_S16SYS,
        \Serafim\SDL\Audio\Format::AUDIO_S32SYS,
        \Serafim\SDL\Audio\Format::AUDIO_F32SYS
    );

    expectedArguments(\Serafim\SDL\Mixer\Mixer::Mix_Init(), 0, argumentsSet('ffi_sdl_mixer_mix_initflags'));

    expectedArguments(\Serafim\SDL\Mixer\Mixer::Mix_OpenAudio(), 0, \Serafim\SDL\Mixer\Mixer::MIX_DEFAULT_FREQUENCY);
    expectedArguments(\Serafim\SDL\Mixer\Mixer::Mix_OpenAudio(), 1, argumentsSet('ffi_sdl_mixer_audio_format'));
    expectedArguments(\Serafim\SDL\Mixer\Mixer::Mix_OpenAudio(), 2, \Serafim\SDL\Mixer\Mixer::MIX_DEFAULT_CHANNELS);

    expectedArguments(\Serafim\SDL\Mixer\Mixer::Mix_OpenAudioDevice(), 0, \Serafim\SDL\Mixer\Mixer::MIX_DEFAULT_FREQUENCY);
    expectedArguments(\Serafim\SDL\Mixer\Mixer::Mix_OpenAudioDevice(), 1, argumentsSet('ffi_sdl_mixer_audio_format'));
    expectedArguments(\Serafim\SDL\Mixer\Mixer::Mix_OpenAudioDevice(), 2, \Serafim\SDL\Mixer\Mixer::MIX_DEFAULT_CHANNELS);

}
