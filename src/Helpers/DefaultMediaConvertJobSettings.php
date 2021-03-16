<?php

namespace Meema\MediaConverter\Helpers;

class DefaultMediaConvertJobSettings
{
    public static function get(): array
    {
        return [
            'OutputGroups' => [
                [
                    'CustomName' => 'Thumbnails',
                    'Name' => 'File Group',
                    'Outputs' => [
                        [
                            'ContainerSettings' => [
                                'Container' => 'RAW',
                            ],
                            'VideoDescription' => [
                                'ScalingBehavior' => 'DEFAULT',
                                'TimecodeInsertion' => 'DISABLED',
                                'AntiAlias' => 'ENABLED',
                                'Sharpness' => 50,
                                'CodecSettings' => [
                                    'Codec' => 'FRAME_CAPTURE',
                                    'FrameCaptureSettings' => [
                                        'FramerateNumerator' => null, // to be set dynamically
                                        'FramerateDenominator' => null, // to be set dynamically
                                        'MaxCaptures' => null, // to be set dynamically
                                        'Quality' => null, // to be set dynamically
                                    ],
                                ],
                                'AfdSignaling' => 'NONE',
                                'DropFrameTimecode' => 'ENABLED',
                                'RespondToAfd' => 'NONE',
                                'ColorMetadata' => 'INSERT',
                                'Width' => null, // to be set dynamically
                            ],
                            'NameModifier' => null, // to be set dynamically
                        ],
                    ],
                    'OutputGroupSettings' => [
                        'Type' => 'FILE_GROUP_SETTINGS',
                        'FileGroupSettings' => [
                            'Destination' => null, // to be set dynamically
                            'DestinationSettings' => [
                                'S3Settings' => [
                                    'AccessControl' => [
                                        'CannedAcl' => 'PUBLIC_READ',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'CustomName' => 'MP4',
                    'Name' => 'File Group',
                    'Outputs' => [
                        [
                            'ContainerSettings' => [
                                'Container' => 'MP4',
                                'Mp4Settings' => [
                                    'CslgAtom' => 'INCLUDE',
                                    'FreeSpaceBox' => 'EXCLUDE',
                                    'MoovPlacement' => 'PROGRESSIVE_DOWNLOAD',
                                ],
                            ],
                            'VideoDescription' => [
                                'ScalingBehavior' => 'DEFAULT',
                                'TimecodeInsertion' => 'DISABLED',
                                'AntiAlias' => 'ENABLED',
                                'Sharpness' => 50,
                                'CodecSettings' => [
                                    'Codec' => 'H_264',
                                    'H264Settings' => [
                                        'InterlaceMode' => 'PROGRESSIVE',
                                        'NumberReferenceFrames' => 3,
                                        'Syntax' => 'DEFAULT',
                                        'Softness' => 0,
                                        'GopClosedCadence' => 1,
                                        'GopSize' => 90,
                                        'Slices' => 1,
                                        'GopBReference' => 'DISABLED',
                                        'MaxBitrate' => 8000000,
                                        'SlowPal' => 'DISABLED',
                                        'SpatialAdaptiveQuantization' => 'ENABLED',
                                        'TemporalAdaptiveQuantization' => 'ENABLED',
                                        'FlickerAdaptiveQuantization' => 'DISABLED',
                                        'EntropyEncoding' => 'CABAC',
                                        'FramerateControl' => 'INITIALIZE_FROM_SOURCE',
                                        'RateControlMode' => 'QVBR',
                                        'QvbrSettings' => [
                                            'QvbrQualityLevel' => 7,
                                            'QvbrQualityLevelFineTune' => 0,
                                        ],
                                        'CodecProfile' => 'MAIN',
                                        'Telecine' => 'NONE',
                                        'MinIInterval' => 0,
                                        'AdaptiveQuantization' => 'HIGH',
                                        'CodecLevel' => 'AUTO',
                                        'FieldEncoding' => 'PAFF',
                                        'SceneChangeDetect' => 'ENABLED',
                                        'QualityTuningLevel' => 'SINGLE_PASS',
                                        'FramerateConversionAlgorithm' => 'DUPLICATE_DROP',
                                        'UnregisteredSeiTimecode' => 'DISABLED',
                                        'GopSizeUnits' => 'FRAMES',
                                        'ParControl' => 'INITIALIZE_FROM_SOURCE',
                                        'NumberBFramesBetweenReferenceFrames' => 2,
                                        'RepeatPps' => 'DISABLED',
                                    ],
                                ],
                                'AfdSignaling' => 'NONE',
                                'DropFrameTimecode' => 'ENABLED',
                                'RespondToAfd' => 'NONE',
                                'ColorMetadata' => 'INSERT',
                            ],
                            'AudioDescriptions' => [
                                [
                                    'AudioTypeControl' => 'FOLLOW_INPUT',
                                    'CodecSettings' => [
                                        'Codec' => 'AAC',
                                        'AacSettings' => [
                                            'AudioDescriptionBroadcasterMix' => 'NORMAL',
                                            'Bitrate' => 96000,
                                            'RateControlMode' => 'CBR',
                                            'CodecProfile' => 'LC',
                                            'CodingMode' => 'CODING_MODE_2_0',
                                            'RawFormat' => 'NONE',
                                            'SampleRate' => 48000,
                                            'Specification' => 'MPEG4',
                                        ],
                                    ],
                                    'LanguageCodeControl' => 'FOLLOW_INPUT',
                                ],
                            ],
                        ],
                    ],
                    'OutputGroupSettings' => [
                        'Type' => 'FILE_GROUP_SETTINGS',
                        'FileGroupSettings' => [
                            'Destination' => null, // to be set dynamically
                            'DestinationSettings' => [
                                'S3Settings' => [
                                    'AccessControl' => [
                                        'CannedAcl' => 'PUBLIC_READ',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'AdAvailOffset' => 0,
            'Inputs' => [
                [
                    'AudioSelectors' => [
                        'Audio Selector 1' => [
                            'Offset' => 0,
                            'DefaultSelection' => 'DEFAULT',
                            'ProgramSelection' => 1,
                        ],
                    ],
                    'VideoSelector' => [
                        'ColorSpace' => 'FOLLOW',
                    ],
                    'FilterEnable' => 'AUTO',
                    'PsiControl' => 'USE_PSI',
                    'FilterStrength' => 0,
                    'DeblockFilter' => 'DISABLED',
                    'DenoiseFilter' => 'DISABLED',
                    'TimecodeSource' => 'EMBEDDED',
                    'FileInput' => null, // to be set dynamically
                ],
            ],
        ];
    }
}
