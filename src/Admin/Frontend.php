<?php

/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flarum\Admin;

use Flarum\Frontend\AbstractFrontend;

class Frontend extends AbstractFrontend
{
    /**
     * {@inheritdoc}
     */
    protected function getName()
    {
        return 'admin';
    }
}
