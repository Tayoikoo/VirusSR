<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JJMJMGLNBDN (6060)
 *
 * Generated from protobuf message <code>RogueTournGetSettleInfoCsReq</code>
 */
class RogueTournGetSettleInfoCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 kjkpmffamfk = 4;</code>
     */
    protected $kjkpmffamfk = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kjkpmffamfk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 kjkpmffamfk = 4;</code>
     * @return int
     */
    public function getKjkpmffamfk()
    {
        return $this->kjkpmffamfk;
    }

    /**
     * Generated from protobuf field <code>uint32 kjkpmffamfk = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setKjkpmffamfk($var)
    {
        GPBUtil::checkUint32($var);
        $this->kjkpmffamfk = $var;

        return $this;
    }

}

