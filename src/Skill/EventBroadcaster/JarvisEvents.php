<?php

namespace Jarvis\Skill\EventBroadcaster;

/**
 * @author Eric Chau <eriic.chau@gmail.com>
 */
interface JarvisEvents
{
    const ANALYZE_EVENT = 'jarvis.analyze';
    const CONTROLLER_EVENT = 'jarvis.controller';
    const RESPONSE_EVENT = 'jarvis.response';
    const EXCEPTION_EVENT = 'jarvis.exception';

    const RESERVED_EVENT_NAMES = [
        self::ANALYZE_EVENT,
        self::CONTROLLER_EVENT,
        self::RESPONSE_EVENT,
        self::EXCEPTION_EVENT,
    ];
}
