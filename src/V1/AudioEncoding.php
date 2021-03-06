<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/texttospeech/v1/cloud_tts.proto

namespace Google\Cloud\TextToSpeech\V1;

/**
 * Configuration to set up audio encoder. The encoding determines the output
 * audio format that we'd like.
 *
 * Protobuf enum <code>Google\Cloud\Texttospeech\V1\AudioEncoding</code>
 */
class AudioEncoding
{
    /**
     * Not specified. Will return result [google.rpc.Code.INVALID_ARGUMENT][].
     *
     * Generated from protobuf enum <code>AUDIO_ENCODING_UNSPECIFIED = 0;</code>
     */
    const AUDIO_ENCODING_UNSPECIFIED = 0;
    /**
     * Uncompressed 16-bit signed little-endian samples (Linear PCM).
     * Audio content returned as LINEAR16 also contains a WAV header.
     *
     * Generated from protobuf enum <code>LINEAR16 = 1;</code>
     */
    const LINEAR16 = 1;
    /**
     * MP3 audio.
     *
     * Generated from protobuf enum <code>MP3 = 2;</code>
     */
    const MP3 = 2;
    /**
     * Opus encoded audio wrapped in an ogg container. The result will be a
     * file which can be played natively on Android, and in browsers (at least
     * Chrome and Firefox). The quality of the encoding is considerably higher
     * than MP3 while using approximately the same bitrate.
     *
     * Generated from protobuf enum <code>OGG_OPUS = 3;</code>
     */
    const OGG_OPUS = 3;
}

