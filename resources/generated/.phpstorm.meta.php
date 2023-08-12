<?php

// @formatter:off
// phpcs:ignoreFile

/**
 * A helper file for FFI, to provide autocomplete information to your IDE
 * Generated for FFI {@see Serafim\SDL\Mixer\Mixer}.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Nesmeyanov Kirill <nesk@xakep.ru>
 * @see https://github.com/php-ffi/ide-helper-generator
 *
 * @psalm-suppress all
 */

declare (strict_types=1);
namespace PHPSTORM_META {
    registerArgumentsSet(
        // ffi_sdl_mixer_types_list
        'ffi_sdl_mixer_types_list',
        'void*',
        'bool',
        'float',
        'double',
        'char',
        'int8_t',
        'uint8_t',
        'int16_t',
        'uint16_t',
        'int32_t',
        'uint32_t',
        'int64_t',
        'uint64_t',
        'Uint8',
        'Sint16',
        'Uint16',
        'Uint32',
        'SDL_bool',
        'SDL_version',
        'SDL_version*',
        'SDL_version**',
        'MIX_InitFlags',
        'Mix_Chunk',
        'Mix_Chunk*',
        'Mix_Chunk**',
        'Mix_Fading',
        'Mix_MusicType',
        'Mix_EffectFunc_t',
        'Mix_EffectDone_t',
    );
    expectedArguments(\Serafim\SDL\Mixer\Mixer::new(), 0, argumentsSet('ffi_sdl_mixer_types_list'));
    expectedArguments(\Serafim\SDL\Mixer\Mixer::cast(), 0, argumentsSet('ffi_sdl_mixer_types_list'));
    expectedArguments(\Serafim\SDL\Mixer\Mixer::type(), 0, argumentsSet('ffi_sdl_mixer_types_list'));
    override(\Serafim\SDL\Mixer\Mixer::new(0), map([
        // List of return type coercions
        '' => '\PHPSTORM_META\@',
        'SDL_RWops' => '\PHPSTORM_META\SDLRWops',
        'SDL_RWops*' => '\PHPSTORM_META\SDLRWops[]',
        'SDL_RWops**' => '\PHPSTORM_META\SDLRWops[]',
        'SDL_RWops**' => '\PHPSTORM_META\SDLRWops[][]',
        'SDL_version' => '\PHPSTORM_META\SDLVersion',
        'SDL_version*' => '\PHPSTORM_META\SDLVersion[]',
        'SDL_version**' => '\PHPSTORM_META\SDLVersion[]',
        'SDL_version**' => '\PHPSTORM_META\SDLVersion[][]',
        'Mix_Chunk' => '\PHPSTORM_META\MixChunk',
        'Mix_Chunk*' => '\PHPSTORM_META\MixChunk[]',
        'Mix_Chunk**' => '\PHPSTORM_META\MixChunk[]',
        'Mix_Chunk**' => '\PHPSTORM_META\MixChunk[][]',
        'Mix_Music' => '\PHPSTORM_META\MixMusic',
        'Mix_Music*' => '\PHPSTORM_META\MixMusic[]',
        'Mix_Music**' => '\PHPSTORM_META\MixMusic[]',
        'Mix_Music**' => '\PHPSTORM_META\MixMusic[][]',
    ]));
    /**
     * Generated "SDL_RWops" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLRWops extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\Mixer\Mixer::new()} with 'SDL_RWops' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_version" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLVersion extends \FFI\CData
    {
        /**
         * @var int<0, 255>
         */
        public int $major;
        /**
         * @var int<0, 255>
         */
        public int $minor;
        /**
         * @var int<0, 255>
         */
        public int $patch;
        /**
         * @internal Please use {@see \Serafim\SDL\Mixer\Mixer::new()} with 'SDL_version' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "Mix_Chunk" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class MixChunk extends \FFI\CData
    {
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $allocated;
        /**
         * @var null|\FFI\CData|object{cdata:int<0, 255>}
         */
        public ?\FFI\CData $abuf;
        /**
         * @var int<0, 4294967296>
         */
        public int $alen;
        /**
         * @var int<0, 255>
         */
        public int $volume;
        /**
         * @internal Please use {@see \Serafim\SDL\Mixer\Mixer::new()} with 'Mix_Chunk' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "Mix_Music" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class MixMusic extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\Mixer\Mixer::new()} with 'Mix_Music' argument instead.
         */
        private function __construct()
        {
        }
    }
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
    registerArgumentsSet(
        // ffi_sdl_mixer_mix_fading
        'ffi_sdl_mixer_mix_fading',
        \Serafim\SDL\Mixer\Fading::MIX_NO_FADING,
        \Serafim\SDL\Mixer\Fading::MIX_FADING_OUT,
        \Serafim\SDL\Mixer\Fading::MIX_FADING_IN
    );
    registerArgumentsSet(
        // ffi_sdl_mixer_mix_musictype
        'ffi_sdl_mixer_mix_musictype',
        \Serafim\SDL\Mixer\MusicType::MUS_NONE,
        \Serafim\SDL\Mixer\MusicType::MUS_CMD,
        \Serafim\SDL\Mixer\MusicType::MUS_WAV,
        \Serafim\SDL\Mixer\MusicType::MUS_MOD,
        \Serafim\SDL\Mixer\MusicType::MUS_MID,
        \Serafim\SDL\Mixer\MusicType::MUS_OGG,
        \Serafim\SDL\Mixer\MusicType::MUS_MP3,
        \Serafim\SDL\Mixer\MusicType::MUS_MP3_MAD_UNUSED,
        \Serafim\SDL\Mixer\MusicType::MUS_FLAC,
        \Serafim\SDL\Mixer\MusicType::MUS_MODPLUG_UNUSED,
        \Serafim\SDL\Mixer\MusicType::MUS_OPUS
    );
    expectedArguments(\Serafim\SDL\Mixer\Mixer::Mix_LoadMUSType_RW(), 1, argumentsSet('ffi_sdl_mixer_mix_musictype'));
    expectedReturnValues(\Serafim\SDL\Mixer\Mixer::Mix_GetMusicType(), argumentsSet('ffi_sdl_mixer_mix_musictype'));
    expectedReturnValues(\Serafim\SDL\Mixer\Mixer::Mix_FadingMusic(), argumentsSet('ffi_sdl_mixer_mix_fading'));
    expectedReturnValues(\Serafim\SDL\Mixer\Mixer::Mix_FadingChannel(), argumentsSet('ffi_sdl_mixer_mix_fading'));
}
namespace Serafim\SDL\Mixer {
    interface Mixer
    {
        /**
         * @return null|\FFI\CData|array{\PHPSTORM_META\SDLVersion}
         */
        public function Mix_Linked_Version(): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $flags
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_Init(int $flags): int;
        public function Mix_Quit(): void;
        /**
         * @param int<-2147483648, 2147483647> $frequency
         * @param int<0, 65536> $format
         * @param int<-2147483648, 2147483647> $channels
         * @param int<-2147483648, 2147483647> $chunksize
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_OpenAudio(int $frequency, int $format, int $channels, int $chunksize): int;
        /**
         * @param int<-2147483648, 2147483647> $frequency
         * @param int<0, 65536> $format
         * @param int<-2147483648, 2147483647> $channels
         * @param int<-2147483648, 2147483647> $chunksize
         * @param int<-2147483648, 2147483647> $allowed_changes
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_OpenAudioDevice(int $frequency, int $format, int $channels, int $chunksize, string|\FFI\CData $device, int $allowed_changes): int;
        /**
         * @param null|\FFI\CData|object{cdata:int<-2147483648, 2147483647>} $frequency
         * @param null|\FFI\CData|object{cdata:int<0, 65536>} $format
         * @param null|\FFI\CData|object{cdata:int<-2147483648, 2147483647>} $channels
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_QuerySpec(?\FFI\CData $frequency, ?\FFI\CData $format, ?\FFI\CData $channels): int;
        /**
         * @param int<-2147483648, 2147483647> $numchans
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_AllocateChannels(int $numchans): int;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\SDLRWops} $src
         * @param int<-2147483648, 2147483647> $freesrc
         * @return null|\FFI\CData|array{\PHPSTORM_META\MixChunk}
         */
        public function Mix_LoadWAV_RW(?\FFI\CData $src, int $freesrc): ?\FFI\CData;
        /**
         * @return null|\FFI\CData|array{\PHPSTORM_META\MixChunk}
         */
        public function Mix_LoadWAV(string|\FFI\CData $file): ?\FFI\CData;
        /**
         * @return null|\FFI\CData|array{\PHPSTORM_META\MixMusic}
         */
        public function Mix_LoadMUS(string|\FFI\CData $file): ?\FFI\CData;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\SDLRWops} $src
         * @param int<-2147483648, 2147483647> $freesrc
         * @return null|\FFI\CData|array{\PHPSTORM_META\MixMusic}
         */
        public function Mix_LoadMUS_RW(?\FFI\CData $src, int $freesrc): ?\FFI\CData;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\SDLRWops} $src
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\Mixer\MusicType::* $type
         * @param int<-2147483648, 2147483647> $freesrc
         * @return null|\FFI\CData|array{\PHPSTORM_META\MixMusic}
         */
        public function Mix_LoadMUSType_RW(?\FFI\CData $src, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Mixer\MusicType::MUS_NONE, \Serafim\SDL\Mixer\MusicType::MUS_CMD, \Serafim\SDL\Mixer\MusicType::MUS_WAV, \Serafim\SDL\Mixer\MusicType::MUS_MOD, \Serafim\SDL\Mixer\MusicType::MUS_MID, \Serafim\SDL\Mixer\MusicType::MUS_OGG, \Serafim\SDL\Mixer\MusicType::MUS_MP3, \Serafim\SDL\Mixer\MusicType::MUS_MP3_MAD_UNUSED, \Serafim\SDL\Mixer\MusicType::MUS_FLAC, \Serafim\SDL\Mixer\MusicType::MUS_MODPLUG_UNUSED, \Serafim\SDL\Mixer\MusicType::MUS_OPUS])] int $type, int $freesrc): ?\FFI\CData;
        /**
         * @param null|\FFI\CData|object{cdata:int<0, 255>} $mem
         * @return null|\FFI\CData|array{\PHPSTORM_META\MixChunk}
         */
        public function Mix_QuickLoad_WAV(?\FFI\CData $mem): ?\FFI\CData;
        /**
         * @param null|\FFI\CData|object{cdata:int<0, 255>} $mem
         * @param int<0, 4294967296> $len
         * @return null|\FFI\CData|array{\PHPSTORM_META\MixChunk}
         */
        public function Mix_QuickLoad_RAW(?\FFI\CData $mem, int $len): ?\FFI\CData;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixChunk} $chunk
         */
        public function Mix_FreeChunk(?\FFI\CData $chunk): void;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixMusic} $music
         */
        public function Mix_FreeMusic(?\FFI\CData $music): void;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_GetNumChunkDecoders(): int;
        /**
         * @param int<-2147483648, 2147483647> $index
         */
        public function Mix_GetChunkDecoder(int $index): string|\FFI\CData;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_HasChunkDecoder(string|\FFI\CData $name): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_GetNumMusicDecoders(): int;
        /**
         * @param int<-2147483648, 2147483647> $index
         */
        public function Mix_GetMusicDecoder(int $index): string|\FFI\CData;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_HasMusicDecoder(string|\FFI\CData $name): int;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixMusic} $music
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Mixer\MusicType::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Mixer\MusicType::MUS_NONE, \Serafim\SDL\Mixer\MusicType::MUS_CMD, \Serafim\SDL\Mixer\MusicType::MUS_WAV, \Serafim\SDL\Mixer\MusicType::MUS_MOD, \Serafim\SDL\Mixer\MusicType::MUS_MID, \Serafim\SDL\Mixer\MusicType::MUS_OGG, \Serafim\SDL\Mixer\MusicType::MUS_MP3, \Serafim\SDL\Mixer\MusicType::MUS_MP3_MAD_UNUSED, \Serafim\SDL\Mixer\MusicType::MUS_FLAC, \Serafim\SDL\Mixer\MusicType::MUS_MODPLUG_UNUSED, \Serafim\SDL\Mixer\MusicType::MUS_OPUS])]
        public function Mix_GetMusicType(?\FFI\CData $music): int;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixMusic} $music
         */
        public function Mix_GetMusicTitle(?\FFI\CData $music): string|\FFI\CData;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixMusic} $music
         */
        public function Mix_GetMusicTitleTag(?\FFI\CData $music): string|\FFI\CData;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixMusic} $music
         */
        public function Mix_GetMusicArtistTag(?\FFI\CData $music): string|\FFI\CData;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixMusic} $music
         */
        public function Mix_GetMusicAlbumTag(?\FFI\CData $music): string|\FFI\CData;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixMusic} $music
         */
        public function Mix_GetMusicCopyrightTag(?\FFI\CData $music): string|\FFI\CData;
        /**
         * @param FFI\CData|null|callable(mixed, null|\FFI\CData|object{cdata:int<0, 255>}, int<-2147483648, 2147483647>):(mixed) $mix_func
         */
        public function Mix_SetPostMix(?\Closure $mix_func, ?\FFI\CData $arg): void;
        /**
         * @param FFI\CData|null|callable(mixed, null|\FFI\CData|object{cdata:int<0, 255>}, int<-2147483648, 2147483647>):(mixed) $mix_func
         */
        public function Mix_HookMusic(?\Closure $mix_func, ?\FFI\CData $arg): void;
        /**
         * @param FFI\CData|null|callable():(mixed) $music_finished
         */
        public function Mix_HookMusicFinished(?\Closure $music_finished): void;
        public function Mix_GetMusicHookData(): ?\FFI\CData;
        /**
         * @param FFI\CData|null|callable(int<-2147483648, 2147483647>):(mixed) $channel_finished
         */
        public function Mix_ChannelFinished(?\Closure $channel_finished): void;
        /**
         * @param int<-2147483648, 2147483647> $chan
         * @param FFI\CData|null|callable(int<-2147483648, 2147483647>, mixed, int<-2147483648, 2147483647>, mixed):(mixed) $f
         * @param FFI\CData|null|callable(int<-2147483648, 2147483647>, mixed):(mixed) $d
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_RegisterEffect(int $chan, ?\Closure $f, ?\Closure $d, ?\FFI\CData $arg): int;
        /**
         * @param int<-2147483648, 2147483647> $channel
         * @param FFI\CData|null|callable(int<-2147483648, 2147483647>, mixed, int<-2147483648, 2147483647>, mixed):(mixed) $f
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_UnregisterEffect(int $channel, ?\Closure $f): int;
        /**
         * @param int<-2147483648, 2147483647> $channel
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_UnregisterAllEffects(int $channel): int;
        /**
         * @param int<-2147483648, 2147483647> $channel
         * @param int<0, 255> $left
         * @param int<0, 255> $right
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_SetPanning(int $channel, int $left, int $right): int;
        /**
         * @param int<-2147483648, 2147483647> $channel
         * @param int<-32768, 32767> $angle
         * @param int<0, 255> $distance
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_SetPosition(int $channel, int $angle, int $distance): int;
        /**
         * @param int<-2147483648, 2147483647> $channel
         * @param int<0, 255> $distance
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_SetDistance(int $channel, int $distance): int;
        /**
         * @param int<-2147483648, 2147483647> $channel
         * @param int<-2147483648, 2147483647> $flip
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_SetReverseStereo(int $channel, int $flip): int;
        /**
         * @param int<-2147483648, 2147483647> $num
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_ReserveChannels(int $num): int;
        /**
         * @param int<-2147483648, 2147483647> $which
         * @param int<-2147483648, 2147483647> $tag
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_GroupChannel(int $which, int $tag): int;
        /**
         * @param int<-2147483648, 2147483647> $from
         * @param int<-2147483648, 2147483647> $to
         * @param int<-2147483648, 2147483647> $tag
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_GroupChannels(int $from, int $to, int $tag): int;
        /**
         * @param int<-2147483648, 2147483647> $tag
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_GroupAvailable(int $tag): int;
        /**
         * @param int<-2147483648, 2147483647> $tag
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_GroupCount(int $tag): int;
        /**
         * @param int<-2147483648, 2147483647> $tag
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_GroupOldest(int $tag): int;
        /**
         * @param int<-2147483648, 2147483647> $tag
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_GroupNewer(int $tag): int;
        /**
         * @param int<-2147483648, 2147483647> $channel
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixChunk} $chunk
         * @param int<-2147483648, 2147483647> $loops
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_PlayChannel(int $channel, ?\FFI\CData $chunk, int $loops): int;
        /**
         * @param int<-2147483648, 2147483647> $channel
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixChunk} $chunk
         * @param int<-2147483648, 2147483647> $loops
         * @param int<-2147483648, 2147483647> $ticks
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_PlayChannelTimed(int $channel, ?\FFI\CData $chunk, int $loops, int $ticks): int;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixMusic} $music
         * @param int<-2147483648, 2147483647> $loops
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_PlayMusic(?\FFI\CData $music, int $loops): int;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixMusic} $music
         * @param int<-2147483648, 2147483647> $loops
         * @param int<-2147483648, 2147483647> $ms
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_FadeInMusic(?\FFI\CData $music, int $loops, int $ms): int;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixMusic} $music
         * @param int<-2147483648, 2147483647> $loops
         * @param int<-2147483648, 2147483647> $ms
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_FadeInMusicPos(?\FFI\CData $music, int $loops, int $ms, float $position): int;
        /**
         * @param int<-2147483648, 2147483647> $channel
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixChunk} $chunk
         * @param int<-2147483648, 2147483647> $loops
         * @param int<-2147483648, 2147483647> $ms
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_FadeInChannel(int $channel, ?\FFI\CData $chunk, int $loops, int $ms): int;
        /**
         * @param int<-2147483648, 2147483647> $channel
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixChunk} $chunk
         * @param int<-2147483648, 2147483647> $loops
         * @param int<-2147483648, 2147483647> $ms
         * @param int<-2147483648, 2147483647> $ticks
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_FadeInChannelTimed(int $channel, ?\FFI\CData $chunk, int $loops, int $ms, int $ticks): int;
        /**
         * @param int<-2147483648, 2147483647> $channel
         * @param int<-2147483648, 2147483647> $volume
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_Volume(int $channel, int $volume): int;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixChunk} $chunk
         * @param int<-2147483648, 2147483647> $volume
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_VolumeChunk(?\FFI\CData $chunk, int $volume): int;
        /**
         * @param int<-2147483648, 2147483647> $volume
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_VolumeMusic(int $volume): int;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixMusic} $music
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_GetMusicVolume(?\FFI\CData $music): int;
        /**
         * @param int<-2147483648, 2147483647> $volume
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_MasterVolume(int $volume): int;
        /**
         * @param int<-2147483648, 2147483647> $channel
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_HaltChannel(int $channel): int;
        /**
         * @param int<-2147483648, 2147483647> $tag
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_HaltGroup(int $tag): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_HaltMusic(): int;
        /**
         * @param int<-2147483648, 2147483647> $channel
         * @param int<-2147483648, 2147483647> $ticks
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_ExpireChannel(int $channel, int $ticks): int;
        /**
         * @param int<-2147483648, 2147483647> $which
         * @param int<-2147483648, 2147483647> $ms
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_FadeOutChannel(int $which, int $ms): int;
        /**
         * @param int<-2147483648, 2147483647> $tag
         * @param int<-2147483648, 2147483647> $ms
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_FadeOutGroup(int $tag, int $ms): int;
        /**
         * @param int<-2147483648, 2147483647> $ms
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_FadeOutMusic(int $ms): int;
        /**
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Mixer\Fading::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Mixer\Fading::MIX_NO_FADING, \Serafim\SDL\Mixer\Fading::MIX_FADING_OUT, \Serafim\SDL\Mixer\Fading::MIX_FADING_IN])]
        public function Mix_FadingMusic(): int;
        /**
         * @param int<-2147483648, 2147483647> $which
         * @return int<-2147483648, 2147483647>|\Serafim\SDL\Mixer\Fading::*
         */
        #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\Mixer\Fading::MIX_NO_FADING, \Serafim\SDL\Mixer\Fading::MIX_FADING_OUT, \Serafim\SDL\Mixer\Fading::MIX_FADING_IN])]
        public function Mix_FadingChannel(int $which): int;
        /**
         * @param int<-2147483648, 2147483647> $channel
         */
        public function Mix_Pause(int $channel): void;
        /**
         * @param int<-2147483648, 2147483647> $channel
         */
        public function Mix_Resume(int $channel): void;
        /**
         * @param int<-2147483648, 2147483647> $channel
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_Paused(int $channel): int;
        public function Mix_PauseMusic(): void;
        public function Mix_ResumeMusic(): void;
        public function Mix_RewindMusic(): void;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_PausedMusic(): int;
        /**
         * @param int<-2147483648, 2147483647> $order
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_ModMusicJumpToOrder(int $order): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_SetMusicPosition(float $position): int;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixMusic} $music
         */
        public function Mix_GetMusicPosition(?\FFI\CData $music): float;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixMusic} $music
         */
        public function Mix_MusicDuration(?\FFI\CData $music): float;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixMusic} $music
         */
        public function Mix_GetMusicLoopStartTime(?\FFI\CData $music): float;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixMusic} $music
         */
        public function Mix_GetMusicLoopEndTime(?\FFI\CData $music): float;
        /**
         * @param null|\FFI\CData|array{\PHPSTORM_META\MixMusic} $music
         */
        public function Mix_GetMusicLoopLengthTime(?\FFI\CData $music): float;
        /**
         * @param int<-2147483648, 2147483647> $channel
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_Playing(int $channel): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_PlayingMusic(): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_SetMusicCMD(string|\FFI\CData $command): int;
        /**
         * @param int<-2147483648, 2147483647> $value
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_SetSynchroValue(int $value): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_GetSynchroValue(): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_SetSoundFonts(string|\FFI\CData $paths): int;
        public function Mix_GetSoundFonts(): string|\FFI\CData;
        /**
         * @param FFI\CData|null|callable(mixed, mixed):(int<-2147483648, 2147483647>) $function
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_EachSoundFont(?\Closure $function, ?\FFI\CData $data): int;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function Mix_SetTimidityCfg(string|\FFI\CData $path): int;
        public function Mix_GetTimidityCfg(): string|\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $channel
         * @return null|\FFI\CData|array{\PHPSTORM_META\MixChunk}
         */
        public function Mix_GetChunk(int $channel): ?\FFI\CData;
        public function Mix_CloseAudio(): void;
    }
}