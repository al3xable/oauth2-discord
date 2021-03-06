<?php

/*
 * This file is a part of the oauth2-discord project.
 *
 * Copyright (c) 2016 David Cole <david@team-reflex.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the LICENSE.md file.
 */

namespace Discord\OAuth\Parts;

use Discord\OAuth\Part;

/**
 * @property string $code
 * @property $guild
 * @property $xkcdpass
 * @property $channel
 */
class Invite extends Part
{
    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'code',
        'guild',
        'xkcdpass',
        'channel',
    ];
}
