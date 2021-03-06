<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RenameFace
 *
 * @method string getLibraryId()
 * @method string getStoreName()
 * @method string getFaceId()
 * @method string getFaceName()
 */
class RenameFace extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudPhoto';

    /**
     * @var string
     */
    public $version = '2017-07-11';

    /**
     * @var string
     */
    public $action = 'RenameFace';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cloudphoto';

    /**
     * @deprecated deprecated since version 2.0, Use withLibraryId() instead.
     *
     * @param string $libraryId
     *
     * @return $this
     */
    public function setLibraryId($libraryId)
    {
        return $this->withLibraryId($libraryId);
    }

    /**
     * @param string $libraryId
     *
     * @return $this
     */
    public function withLibraryId($libraryId)
    {
        $this->data['LibraryId'] = $libraryId;
        $this->options['query']['LibraryId'] = $libraryId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStoreName() instead.
     *
     * @param string $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        return $this->withStoreName($storeName);
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function withStoreName($storeName)
    {
        $this->data['StoreName'] = $storeName;
        $this->options['query']['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFaceId() instead.
     *
     * @param string $faceId
     *
     * @return $this
     */
    public function setFaceId($faceId)
    {
        return $this->withFaceId($faceId);
    }

    /**
     * @param string $faceId
     *
     * @return $this
     */
    public function withFaceId($faceId)
    {
        $this->data['FaceId'] = $faceId;
        $this->options['query']['FaceId'] = $faceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFaceName() instead.
     *
     * @param string $faceName
     *
     * @return $this
     */
    public function setFaceName($faceName)
    {
        return $this->withFaceName($faceName);
    }

    /**
     * @param string $faceName
     *
     * @return $this
     */
    public function withFaceName($faceName)
    {
        $this->data['FaceName'] = $faceName;
        $this->options['query']['FaceName'] = $faceName;

        return $this;
    }
}
