<?php
/**
 * This source file is proprietary and part of Rebilly.
 *
 * (c) Rebilly SRL
 *     Rebilly Ltd.
 *     Rebilly Inc.
 *
 * @see https://www.rebilly.com
 */

namespace Rebilly\Entities;

use Rebilly\Rest\Entity;

/**
 * Class ApiTracking.
 */
final class ApiTracking extends Entity
{
    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->getAttribute('status');
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->getAttribute('url');
    }

    /**
     * @return string
     */
    public function getRoute()
    {
        return $this->getAttribute('route');
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->getAttribute('method');
    }

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->getAttribute('request');
    }

    /**
     * @return string
     */
    public function getResponse()
    {
        return $this->getAttribute('response');
    }

    /**
     * @return null|TrackingUser
     */
    public function getUser()
    {
        return $this->hasEmbeddedResource('user') ? new TrackingUser($this->getEmbeddedResource('user')) : null;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->getAttribute('duration');
    }

    /**
     * @return string
     */
    public function getCreatedTime()
    {
        return $this->getAttribute('createdTime');
    }
}
