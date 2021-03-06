<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeInstanceHistoryEvents
 *
 * @method array getEventId()
 * @method string getResourceOwnerId()
 * @method string getEventCycleStatus()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method array getInstanceEventCycleStatus()
 * @method string getEventPublishTimeEnd()
 * @method array getInstanceEventType()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getNotBeforeStart()
 * @method string getOwnerId()
 * @method string getEventPublishTimeStart()
 * @method string getInstanceId()
 * @method string getNotBeforeEnd()
 * @method string getEventType()
 */
class DescribeInstanceHistoryEvents extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'DescribeInstanceHistoryEvents';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use getEventId() instead.
     *
     * @return array
     */
    public function getEventIds()
    {
        return $this->getEventId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEventId() instead.
     *
     * @param array $eventIds
     *
     * @return $this
     */
    public function setEventIds(array $eventIds)
    {
        return $this->withEventId($eventIds);
    }

    /**
     * @param array $eventId
     *
     * @return $this
     */
    public function withEventId(array $eventId)
    {
        $this->data['EventId'] = $eventId;
        foreach ($eventId as $i => $iValue) {
            $this->options['query']['EventId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEventCycleStatus() instead.
     *
     * @param string $eventCycleStatus
     *
     * @return $this
     */
    public function setEventCycleStatus($eventCycleStatus)
    {
        return $this->withEventCycleStatus($eventCycleStatus);
    }

    /**
     * @param string $eventCycleStatus
     *
     * @return $this
     */
    public function withEventCycleStatus($eventCycleStatus)
    {
        $this->data['EventCycleStatus'] = $eventCycleStatus;
        $this->options['query']['EventCycleStatus'] = $eventCycleStatus;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getInstanceEventCycleStatus() instead.
     *
     * @return array
     */
    public function getInstanceEventCycleStatuss()
    {
        return $this->getInstanceEventCycleStatus();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceEventCycleStatus() instead.
     *
     * @param array $instanceEventCycleStatuss
     *
     * @return $this
     */
    public function setInstanceEventCycleStatuss(array $instanceEventCycleStatuss)
    {
        return $this->withInstanceEventCycleStatus($instanceEventCycleStatuss);
    }

    /**
     * @param array $instanceEventCycleStatus
     *
     * @return $this
     */
    public function withInstanceEventCycleStatus(array $instanceEventCycleStatus)
    {
        $this->data['InstanceEventCycleStatus'] = $instanceEventCycleStatus;
        foreach ($instanceEventCycleStatus as $i => $iValue) {
            $this->options['query']['InstanceEventCycleStatus.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEventPublishTimeEnd() instead.
     *
     * @param string $eventPublishTimeEnd
     *
     * @return $this
     */
    public function setEventPublishTimeEnd($eventPublishTimeEnd)
    {
        return $this->withEventPublishTimeEnd($eventPublishTimeEnd);
    }

    /**
     * @param string $eventPublishTimeEnd
     *
     * @return $this
     */
    public function withEventPublishTimeEnd($eventPublishTimeEnd)
    {
        $this->data['EventPublishTimeEnd'] = $eventPublishTimeEnd;
        $this->options['query']['EventPublishTime.End'] = $eventPublishTimeEnd;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getInstanceEventType() instead.
     *
     * @return array
     */
    public function getInstanceEventTypes()
    {
        return $this->getInstanceEventType();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceEventType() instead.
     *
     * @param array $instanceEventTypes
     *
     * @return $this
     */
    public function setInstanceEventTypes(array $instanceEventTypes)
    {
        return $this->withInstanceEventType($instanceEventTypes);
    }

    /**
     * @param array $instanceEventType
     *
     * @return $this
     */
    public function withInstanceEventType(array $instanceEventType)
    {
        $this->data['InstanceEventType'] = $instanceEventType;
        foreach ($instanceEventType as $i => $iValue) {
            $this->options['query']['InstanceEventType.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNotBeforeStart() instead.
     *
     * @param string $notBeforeStart
     *
     * @return $this
     */
    public function setNotBeforeStart($notBeforeStart)
    {
        return $this->withNotBeforeStart($notBeforeStart);
    }

    /**
     * @param string $notBeforeStart
     *
     * @return $this
     */
    public function withNotBeforeStart($notBeforeStart)
    {
        $this->data['NotBeforeStart'] = $notBeforeStart;
        $this->options['query']['NotBefore.Start'] = $notBeforeStart;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEventPublishTimeStart() instead.
     *
     * @param string $eventPublishTimeStart
     *
     * @return $this
     */
    public function setEventPublishTimeStart($eventPublishTimeStart)
    {
        return $this->withEventPublishTimeStart($eventPublishTimeStart);
    }

    /**
     * @param string $eventPublishTimeStart
     *
     * @return $this
     */
    public function withEventPublishTimeStart($eventPublishTimeStart)
    {
        $this->data['EventPublishTimeStart'] = $eventPublishTimeStart;
        $this->options['query']['EventPublishTime.Start'] = $eventPublishTimeStart;

        return $this;
    }

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
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNotBeforeEnd() instead.
     *
     * @param string $notBeforeEnd
     *
     * @return $this
     */
    public function setNotBeforeEnd($notBeforeEnd)
    {
        return $this->withNotBeforeEnd($notBeforeEnd);
    }

    /**
     * @param string $notBeforeEnd
     *
     * @return $this
     */
    public function withNotBeforeEnd($notBeforeEnd)
    {
        $this->data['NotBeforeEnd'] = $notBeforeEnd;
        $this->options['query']['NotBefore.End'] = $notBeforeEnd;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEventType() instead.
     *
     * @param string $eventType
     *
     * @return $this
     */
    public function setEventType($eventType)
    {
        return $this->withEventType($eventType);
    }

    /**
     * @param string $eventType
     *
     * @return $this
     */
    public function withEventType($eventType)
    {
        $this->data['EventType'] = $eventType;
        $this->options['query']['EventType'] = $eventType;

        return $this;
    }
}
