<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ILEMKEIIECI (6784)
 *
 * Generated from protobuf message <code>SpaceZooBornCsReq</code>
 */
class SpaceZooBornCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 emljneelbff = 2;</code>
     */
    protected $emljneelbff = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 glofajbilec = 7;</code>
     */
    private $glofajbilec;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $emljneelbff
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $glofajbilec
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 emljneelbff = 2;</code>
     * @return int
     */
    public function getEmljneelbff()
    {
        return $this->emljneelbff;
    }

    /**
     * Generated from protobuf field <code>uint32 emljneelbff = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEmljneelbff($var)
    {
        GPBUtil::checkUint32($var);
        $this->emljneelbff = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 glofajbilec = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGlofajbilec()
    {
        return $this->glofajbilec;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 glofajbilec = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGlofajbilec($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->glofajbilec = $arr;

        return $this;
    }

}
