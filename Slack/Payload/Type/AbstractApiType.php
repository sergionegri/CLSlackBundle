<?php

/*
 * This file is part of the CLSlackBundle.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Bundle\SlackBundle\Slack\Payload\Type;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
abstract class AbstractApiType extends AbstractType
{
    /**
     * Returns the API method slug for this type.
     *
     * @return string The method slug for this type
    */
    abstract public function getMethodSlug();
}
