<?php

namespace AlibabaCloud\Pvtz\V20180101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeZoneInfo
 *
 * @method string getUserClientIp()
 * @method string getZoneId()
 * @method string getLang()
 */
class DescribeZoneInfo extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'pvtz';

    /**
     * @var string
     */
    public $version = '2018-01-01';

    /**
     * @var string
     */
    public $action = 'DescribeZoneInfo';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'pvtz';

    /**
     * @deprecated deprecated since version 2.0, Use withUserClientIp() instead.
     *
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        return $this->withUserClientIp($userClientIp);
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withZoneId() instead.
     *
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        return $this->withZoneId($zoneId);
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function withZoneId($zoneId)
    {
        $this->data['ZoneId'] = $zoneId;
        $this->options['query']['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }
}
