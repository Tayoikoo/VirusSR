<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GGPNOAGFEEC</code>
 */
class GGPNOAGFEEC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 BIIHOBMMFDP = 11;</code>
     */
    protected $BIIHOBMMFDP = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $BIIHOBMMFDP
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 BIIHOBMMFDP = 11;</code>
     * @return int
     */
    public function getBIIHOBMMFDP()
    {
        return $this->BIIHOBMMFDP;
    }

    /**
     * Generated from protobuf field <code>uint32 BIIHOBMMFDP = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setBIIHOBMMFDP($var)
    {
        GPBUtil::checkUint32($var);
        $this->BIIHOBMMFDP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}

