# FFI SDL Mixer Bindings

<p align="center">
    <a href="https://packagist.org/packages/serafim/ffi-sdl-mixer"><img src="https://poser.pugx.org/serafim/ffi-sdl-mixer/require/php?style=for-the-badge" alt="PHP 8.1+"></a>
    <a href="https://github.com/libsdl-org/SDL_mixer"><img src="https://img.shields.io/badge/SDL_mixer-2.6.3-132B48.svg?style=for-the-badge&logo=c%2b%2b" alt="SDL_mixer"></a>
    <a href="https://packagist.org/packages/serafim/ffi-sdl-mixer"><img src="https://poser.pugx.org/serafim/ffi-sdl-mixer/version?style=for-the-badge" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/serafim/ffi-sdl-mixer"><img src="https://poser.pugx.org/serafim/ffi-sdl-mixer/v/unstable?style=for-the-badge" alt="Latest Unstable Version"></a>
    <a href="https://packagist.org/packages/serafim/ffi-sdl-mixer"><img src="https://poser.pugx.org/serafim/ffi-sdl-mixer/downloads?style=for-the-badge" alt="Total Downloads"></a>
    <a href="https://raw.githubusercontent.com/serafim/ffi-sdl-mixer/master/LICENSE.md"><img src="https://poser.pugx.org/serafim/ffi-sdl-mixer/license?style=for-the-badge" alt="License MIT"></a>
</p>
<p align="center">
    <a href="https://github.com/SerafimArts/ffi-sdl-mixer/actions"><img src="https://github.com/SerafimArts/ffi-sdl-mixer/workflows/build/badge.svg"></a>
</p>

A SDL_ttf extension FFI bindings for the PHP language compatible with [SDL FFI bindings for the PHP language](https://github.com/SerafimArts/ffi-sdl).

- [System Requirements](#requirements)
- [Installation](#installation)
- [Documentation](#documentation)
- [Initialization](#initialization)
- [Example](#example)

## Requirements

- PHP ^8.1
- ext-ffi
- Windows, Linux, BSD or MacOS
    - Android, iOS or something else are not supported yet
- SDL and SDL Mixer >= 2.0

## Installation

Library is available as composer repository and can be 
installed using the following command in a root of your project.

```bash
$ composer require serafim/ffi-sdl-mixer
```

Additional dependencies:
  - Debian-based Linux: `sudo apt install libsdl2-mixer-2.0-0 -y`
  - MacOS: `brew install sdl2_mixer`
  - Window: Can be [downloaded from here](https://github.com/libsdl-org/SDL_mixer/releases)

## Documentation

The library API completely supports and repeats the analogue in the C language.

- [SDL2 Mixer official documentation](https://www.libsdl.org/projects/SDL_mixer/docs/index.html)

## Initialization

In the case that you need a specific SDL instance, it should be passed 
explicitly:

```php
$sdl = new Serafim\SDL\SDL(version: '2.28.3');
$mixer = new Serafim\SDL\Mixer\Mixer(sdl: $sdl);

// If no argument is passed, the latest initialized
// version will be used.
$mixer = new Serafim\SDL\Mixer\Mixer(sdl: null);
```

> ! It is recommended to always specify the SDL dependency explicitly.

To specify a library pathname explicitly, you can add the `library` argument to
the `Serafim\SDL\Mixer\Mixer` constructor.

> By default, the library will try to resolve the binary's pathname automatically.

```php
// Load library from pathname (it may be relative or part of system-dependent path)
$mixer = new Serafim\SDL\Mixer\Mixer(library: __DIR__ . '/path/to/library.so');

// Try to automatically resolve library's pathname
$mixer = new Serafim\SDL\Mixer\Mixer(library: null);
```

You can also specify the library version explicitly. Depending on this version,
the corresponding functions of the SDL Image will be available.

> By default, the library will try to resolve SDL Image version automatically.

```php
// Use v2.0.5 from string
$mixer = new Serafim\SDL\Mixer\Mixer(version: '2.0.5');

// Use v2.6.3 from predefined versions constant
$mixer = new Serafim\SDL\Mixer\Mixer(version: \Serafim\SDL\Image\Version::V2_6_3);

// Use latest supported version
$mixer = new Serafim\SDL\Mixer\Mixer(version: \Serafim\SDL\Image\Version::LATEST);
```

To speed up the header compiler, you can use any PSR-16 compatible cache driver.

```php
$mixer = new Serafim\SDL\Mixer\Mixer(cache: new Psr16Cache(...));
```

In addition, you can control other preprocessor directives explicitly:

```php
$pre = new \FFI\Preprocessor\Preprocessor();
$pre->define('true', 'false'); // happy debugging!

$mixer = new Serafim\SDL\Mixer\Mixer(pre: $pre);
```

## Example

```php
use Serafim\SDL\SDL;
use Serafim\SDL\Mixer\Mixer;

$sdl = new SDL();
$mixer = new Mixer(sdl: $sdl);

$sdl->SDL_Init(\Serafim\SDL\InitFlags::SDL_INIT_EVERYTHING);
$mixer->Mix_Init(\Serafim\SDL\Mixer\InitFlags::MIX_INIT_MP3);

$music = $mixer->Mix_LoadMUS(__DIR__ . '/path/to/file.mp3');
$mixer->Mix_PlayMusic(\FFI::addr($music), 0);

while (true) {
    usleep(1);
}

$mixer->Mix_Quit();
$sdl->SDL_Quit();
```
