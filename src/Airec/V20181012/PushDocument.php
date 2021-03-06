<?php

namespace AlibabaCloud\Airec\V20181012;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of PushDocument
 *
 * @method string getInstanceId()
 * @method string getTableName()
 */
class PushDocument extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'Airec';

    /**
     * @var string
     */
    public $version = '2018-10-12';

    /**
     * @var string
     */
    public $action = 'PushDocument';

    /**
     * @var string
     */
    public $pathPattern = '/openapi/instances/[InstanceId]/tables/[TableName]/actions/bulk';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'airec';

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->pathParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTableName() instead.
     *
     * @param string $tableName
     *
     * @return $this
     */
    public function setTableName($tableName)
    {
        return $this->withTableName($tableName);
    }

    /**
     * @param string $tableName
     *
     * @return $this
     */
    public function withTableName($tableName)
    {
        $this->data['TableName'] = $tableName;
        $this->pathParameters['TableName'] = $tableName;

        return $this;
    }
}
