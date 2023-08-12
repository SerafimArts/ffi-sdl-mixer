<?php

declare(strict_types=1);

namespace Serafim\SDL\Mixer;

use FFI\Contracts\Headers\HeaderInterface;
use FFI\Contracts\Headers\Version\ComparableInterface;
use FFI\Contracts\Headers\VersionInterface;
use FFI\Contracts\Preprocessor\Exception\PreprocessorExceptionInterface;
use FFI\Contracts\Preprocessor\PreprocessorInterface;
use FFI\Preprocessor\Preprocessor;
use Serafim\SDL\Version as SDLVersion;

final class Header implements HeaderInterface
{
    /**
     * @var non-empty-string
     */
    private const HEADERS_ENTRYPOINT = __DIR__ . '/../resources/headers/SDL_mixer.h';

    public function __construct(
        private readonly PreprocessorInterface $pre,
    ) {
    }

    /**
     * @return non-empty-string
     */
    public function getPathname(): string
    {
        return self::HEADERS_ENTRYPOINT;
    }

    public static function create(
        VersionInterface $sdlVersion = SDLVersion::LATEST,
        VersionInterface $mixerVersion = Version::LATEST,
        PreprocessorInterface $pre = new Preprocessor(),
    ): self {
        $pre = clone $pre;

        if (!$mixerVersion instanceof ComparableInterface) {
            $mixerVersion = Version::create($mixerVersion->toString());
        }

        $pre->define('_SDL_MIXER_VERSION_GTE', static fn (string $expected): bool =>
            \version_compare($mixerVersion->toString(), $expected, '>=')
        );
        $pre->define('_SDL_VERSION_GTE', static fn (string $expected): bool =>
            \version_compare($sdlVersion->toString(), $expected, '>=')
        );
        $pre->define('SDL_VERSION_ATLEAST', static fn (string $a, string $b, string $c): bool =>
            \version_compare($sdlVersion->toString(), \sprintf('%d.%d.%d', $a, $b, $c), '>=')
        );

        $pre->add('SDL_stdinc.h', <<<'CLANG'
            #ifndef SDL_stdinc_h_
                #define SDL_stdinc_h_
                typedef uint8_t Uint8;
                typedef int16_t Sint16;
                typedef uint16_t Uint16;
                typedef uint32_t Uint32;
                typedef int SDL_bool;
                typedef struct SDL_RWops SDL_RWops;
                typedef struct SDL_version SDL_version;
            #endif
            CLANG);

        $pre->add('SDL_rwops.h', '');
        $pre->add('SDL_audio.h', '');
        $pre->add('SDL_endian.h', '');
        $pre->add('SDL_version.h', '');
        $pre->add('begin_code.h', '');
        $pre->add('close_code.h', '');

        $pre->define('DECLSPEC', '');
        $pre->define('SDLCALL', '');

        return new self($pre);
    }

    /**
     * @throws PreprocessorExceptionInterface
     */
    public function __toString(): string
    {
        return (string)$this->pre->process(new \SplFileInfo($this->getPathname()));
    }
}
