<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DMLOAJGICBH</code>
 */
class DMLOAJGICBH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 MFINKDILJGO = 4;</code>
     */
    protected $MFINKDILJGO = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $MFINKDILJGO
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 MFINKDILJGO = 4;</code>
     * @return int
     */
    public function getMFINKDILJGO()
    {
        return $this->MFINKDILJGO;
    }

    /**
     * Generated from protobuf field <code>uint32 MFINKDILJGO = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMFINKDILJGO($var)
    {
        GPBUtil::checkUint32($var);
        $this->MFINKDILJGO = $var;

        return $this;
    }

}

