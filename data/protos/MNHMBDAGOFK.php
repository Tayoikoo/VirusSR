<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MNHMBDAGOFK</code>
 */
class MNHMBDAGOFK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.IPDPIAGBMNO HDMFHOPNPAI = 13;</code>
     */
    protected $HDMFHOPNPAI = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \IPDPIAGBMNO $HDMFHOPNPAI
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.IPDPIAGBMNO HDMFHOPNPAI = 13;</code>
     * @return \IPDPIAGBMNO|null
     */
    public function getHDMFHOPNPAI()
    {
        return $this->HDMFHOPNPAI;
    }

    public function hasHDMFHOPNPAI()
    {
        return isset($this->HDMFHOPNPAI);
    }

    public function clearHDMFHOPNPAI()
    {
        unset($this->HDMFHOPNPAI);
    }

    /**
     * Generated from protobuf field <code>.IPDPIAGBMNO HDMFHOPNPAI = 13;</code>
     * @param \IPDPIAGBMNO $var
     * @return $this
     */
    public function setHDMFHOPNPAI($var)
    {
        GPBUtil::checkMessage($var, \IPDPIAGBMNO::class);
        $this->HDMFHOPNPAI = $var;

        return $this;
    }

}

