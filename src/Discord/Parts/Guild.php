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
 * @property string $id
 * @property string $name
 * @property string $icon
 * @property $owner
 * @property $permissions
 */
class Guild extends Part
{
    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'id',
        'name',
        'icon',
        'owner',
        'permissions',
    ];
}
