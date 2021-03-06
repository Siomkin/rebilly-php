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

namespace Rebilly\Services;

use ArrayObject;
use JsonSerializable;
use Rebilly\Entities\Website;
use Rebilly\Http\Exception\NotFoundException;
use Rebilly\Http\Exception\UnprocessableEntityException;
use Rebilly\Paginator;
use Rebilly\Rest\Collection;
use Rebilly\Rest\Service;

/**
 * Class WebsiteService
 *
 */
final class WebsiteService extends Service
{
    /**
     * @param array|ArrayObject $params
     *
     * @return Website[][]|Collection[]|Paginator
     */
    public function paginator($params = [])
    {
        return new Paginator($this->client(), 'websites', $params);
    }

    /**
     * @param array|ArrayObject $params
     *
     * @return Website[]|Collection
     */
    public function search($params = [])
    {
        return $this->client()->get('websites', $params);
    }

    /**
     * @param string $websiteId
     * @param array|ArrayObject $params
     *
     * @throws NotFoundException The resource data does not exist
     *
     * @return Website
     */
    public function load($websiteId, $params = [])
    {
        return $this->client()->get('websites/{websiteId}', ['websiteId' => $websiteId] + (array) $params);
    }

    /**
     * @param array|JsonSerializable|Website $data
     * @param string $websiteId
     *
     * @throws UnprocessableEntityException The input data does not valid
     *
     * @return Website
     */
    public function create($data, $websiteId = null)
    {
        if (isset($websiteId)) {
            return $this->client()->put($data, 'websites/{websiteId}', ['websiteId' => $websiteId]);
        }

        return $this->client()->post($data, 'websites');
    }

    /**
     * @param string $websiteId
     * @param array|JsonSerializable|Website $data
     *
     * @throws UnprocessableEntityException The input data does not valid
     *
     * @return Website
     */
    public function update($websiteId, $data)
    {
        return $this->client()->put($data, 'websites/{websiteId}', ['websiteId' => $websiteId]);
    }

    /**
     * @param string $websiteId
     */
    public function delete($websiteId)
    {
        $this->client()->delete('websites/{websiteId}', ['websiteId' => $websiteId]);
    }
}
