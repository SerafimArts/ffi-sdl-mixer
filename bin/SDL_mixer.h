#include <stdint.h>
    typedef uint8_t Uint8;
    typedef int16_t Sint16;
    typedef uint16_t Uint16;
    typedef uint32_t Uint32;
    typedef int SDL_bool;
    typedef struct SDL_RWops SDL_RWops;
    typedef struct SDL_version {
        Uint8 major;
        Uint8 minor;
        Uint8 patch;
    } SDL_version;
extern  const SDL_version *  Mix_Linked_Version(void);
typedef enum
{
    MIX_INIT_FLAC   = 0x00000001,
    MIX_INIT_MOD    = 0x00000002,
    MIX_INIT_MP3    = 0x00000008,
    MIX_INIT_OGG    = 0x00000010,
    MIX_INIT_MID    = 0x00000020,
    MIX_INIT_OPUS   = 0x00000040
} MIX_InitFlags;
extern  int  Mix_Init(int flags);
extern  void  Mix_Quit(void);
typedef struct Mix_Chunk {
    int allocated;
    Uint8 *abuf;
    Uint32 alen;
    Uint8 volume;
} Mix_Chunk;
typedef enum {
    MIX_NO_FADING,
    MIX_FADING_OUT,
    MIX_FADING_IN
} Mix_Fading;
typedef enum {
    MUS_NONE,
    MUS_CMD,
    MUS_WAV,
    MUS_MOD,
    MUS_MID,
    MUS_OGG,
    MUS_MP3,
    MUS_MP3_MAD_UNUSED,
    MUS_FLAC,
    MUS_MODPLUG_UNUSED,
    MUS_OPUS
} Mix_MusicType;
typedef struct _Mix_Music Mix_Music;
extern  int  Mix_OpenAudio(int frequency, Uint16 format, int channels, int chunksize);
extern  int  Mix_OpenAudioDevice(int frequency, Uint16 format, int channels, int chunksize, const char* device, int allowed_changes);
extern  int  Mix_QuerySpec(int *frequency, Uint16 *format, int *channels);
extern  int  Mix_AllocateChannels(int numchans);
extern  Mix_Chunk *  Mix_LoadWAV_RW(SDL_RWops *src, int freesrc);
extern  Mix_Chunk *  Mix_LoadWAV(const char *file);
extern  Mix_Music *  Mix_LoadMUS(const char *file);
extern  Mix_Music *  Mix_LoadMUS_RW(SDL_RWops *src, int freesrc);
extern  Mix_Music *  Mix_LoadMUSType_RW(SDL_RWops *src, Mix_MusicType type, int freesrc);
extern  Mix_Chunk *  Mix_QuickLoad_WAV(Uint8 *mem);
extern  Mix_Chunk *  Mix_QuickLoad_RAW(Uint8 *mem, Uint32 len);
extern  void  Mix_FreeChunk(Mix_Chunk *chunk);
extern  void  Mix_FreeMusic(Mix_Music *music);
extern  int  Mix_GetNumChunkDecoders(void);
extern  const char *  Mix_GetChunkDecoder(int index);
extern  SDL_bool  Mix_HasChunkDecoder(const char *name);
extern  int  Mix_GetNumMusicDecoders(void);
extern  const char *  Mix_GetMusicDecoder(int index);
extern  SDL_bool  Mix_HasMusicDecoder(const char *name);
extern  Mix_MusicType  Mix_GetMusicType(const Mix_Music *music);
extern  const char * Mix_GetMusicTitle(const Mix_Music *music);
extern  const char * Mix_GetMusicTitleTag(const Mix_Music *music);
extern  const char * Mix_GetMusicArtistTag(const Mix_Music *music);
extern  const char * Mix_GetMusicAlbumTag(const Mix_Music *music);
extern  const char * Mix_GetMusicCopyrightTag(const Mix_Music *music);
extern  void  Mix_SetPostMix(void ( *mix_func)(void *udata, Uint8 *stream, int len), void *arg);
extern  void  Mix_HookMusic(void ( *mix_func)(void *udata, Uint8 *stream, int len), void *arg);
extern  void  Mix_HookMusicFinished(void ( *music_finished)(void));
extern  void *  Mix_GetMusicHookData(void);
extern  void  Mix_ChannelFinished(void ( *channel_finished)(int channel));
typedef void ( *Mix_EffectFunc_t)(int chan, void *stream, int len, void *udata);
typedef void ( *Mix_EffectDone_t)(int chan, void *udata);
extern  int  Mix_RegisterEffect(int chan, Mix_EffectFunc_t f, Mix_EffectDone_t d, void *arg);
extern  int  Mix_UnregisterEffect(int channel, Mix_EffectFunc_t f);
extern  int  Mix_UnregisterAllEffects(int channel);
extern  int  Mix_SetPanning(int channel, Uint8 left, Uint8 right);
extern  int  Mix_SetPosition(int channel, Sint16 angle, Uint8 distance);
extern  int  Mix_SetDistance(int channel, Uint8 distance);
extern  int  Mix_SetReverseStereo(int channel, int flip);
extern  int  Mix_ReserveChannels(int num);
extern  int  Mix_GroupChannel(int which, int tag);
extern  int  Mix_GroupChannels(int from, int to, int tag);
extern  int  Mix_GroupAvailable(int tag);
extern  int  Mix_GroupCount(int tag);
extern  int  Mix_GroupOldest(int tag);
extern  int  Mix_GroupNewer(int tag);
extern  int  Mix_PlayChannel(int channel, Mix_Chunk *chunk, int loops);
extern  int  Mix_PlayChannelTimed(int channel, Mix_Chunk *chunk, int loops, int ticks);
extern  int  Mix_PlayMusic(Mix_Music *music, int loops);
extern  int  Mix_FadeInMusic(Mix_Music *music, int loops, int ms);
extern  int  Mix_FadeInMusicPos(Mix_Music *music, int loops, int ms, double position);
extern  int  Mix_FadeInChannel(int channel, Mix_Chunk *chunk, int loops, int ms);
extern  int  Mix_FadeInChannelTimed(int channel, Mix_Chunk *chunk, int loops, int ms, int ticks);
extern  int  Mix_Volume(int channel, int volume);
extern  int  Mix_VolumeChunk(Mix_Chunk *chunk, int volume);
extern  int  Mix_VolumeMusic(int volume);
extern  int  Mix_GetMusicVolume(Mix_Music *music);
extern  int  Mix_MasterVolume(int volume);
extern  int  Mix_HaltChannel(int channel);
extern  int  Mix_HaltGroup(int tag);
extern  int  Mix_HaltMusic(void);
extern  int  Mix_ExpireChannel(int channel, int ticks);
extern  int  Mix_FadeOutChannel(int which, int ms);
extern  int  Mix_FadeOutGroup(int tag, int ms);
extern  int  Mix_FadeOutMusic(int ms);
extern  Mix_Fading  Mix_FadingMusic(void);
extern  Mix_Fading  Mix_FadingChannel(int which);
extern  void  Mix_Pause(int channel);
extern  void  Mix_Resume(int channel);
extern  int  Mix_Paused(int channel);
extern  void  Mix_PauseMusic(void);
extern  void  Mix_ResumeMusic(void);
extern  void  Mix_RewindMusic(void);
extern  int  Mix_PausedMusic(void);
extern  int  Mix_ModMusicJumpToOrder(int order);
extern  int  Mix_SetMusicPosition(double position);
extern  double  Mix_GetMusicPosition(Mix_Music *music);
extern  double  Mix_MusicDuration(Mix_Music *music);
extern  double  Mix_GetMusicLoopStartTime(Mix_Music *music);
extern  double  Mix_GetMusicLoopEndTime(Mix_Music *music);
extern  double  Mix_GetMusicLoopLengthTime(Mix_Music *music);
extern  int  Mix_Playing(int channel);
extern  int  Mix_PlayingMusic(void);
extern  int  Mix_SetMusicCMD(const char *command);
extern  int  Mix_SetSynchroValue(int value);
extern  int  Mix_GetSynchroValue(void);
extern  int  Mix_SetSoundFonts(const char *paths);
extern  const char*  Mix_GetSoundFonts(void);
extern  int  Mix_EachSoundFont(int ( *function)(const char*, void*), void *data);
extern  int  Mix_SetTimidityCfg(const char *path);
extern  const char*  Mix_GetTimidityCfg(void);
extern  Mix_Chunk *  Mix_GetChunk(int channel);
extern  void  Mix_CloseAudio(void);