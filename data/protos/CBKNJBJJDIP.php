<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CBKNJBJJDIP</code>
 */
class CBKNJBJJDIP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 JGIOCDOKPHM = 2;</code>
     */
    private $JGIOCDOKPHM;
    /**
     * Generated from protobuf field <code>uint32 JGCHGEDKHHM = 13;</code>
     */
    protected $JGCHGEDKHHM = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $JGIOCDOKPHM
     *     @type int $JGCHGEDKHHM
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 JGIOCDOKPHM = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJGIOCDOKPHM()
    {
        return $this->JGIOCDOKPHM;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 JGIOCDOKPHM = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJGIOCDOKPHM($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->JGIOCDOKPHM = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 JGCHGEDKHHM = 13;</code>
     * @return int
     */
    public function getJGCHGEDKHHM()
    {
        return $this->JGCHGEDKHHM;
    }

    /**
     * Generated from protobuf field <code>uint32 JGCHGEDKHHM = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setJGCHGEDKHHM($var)
    {
        GPBUtil::checkUint32($var);
        $this->JGCHGEDKHHM = $var;

        return $this;
    }

}
