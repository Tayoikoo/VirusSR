<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GPLCIPMFMMK (30193)
 *
 * Generated from protobuf message <code>FightMatch3ChatScRsp</code>
 */
class FightMatch3ChatScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 neokoljpkkp = 2;</code>
     */
    protected $neokoljpkkp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $neokoljpkkp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 neokoljpkkp = 2;</code>
     * @return int
     */
    public function getNeokoljpkkp()
    {
        return $this->neokoljpkkp;
    }

    /**
     * Generated from protobuf field <code>uint32 neokoljpkkp = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNeokoljpkkp($var)
    {
        GPBUtil::checkUint32($var);
        $this->neokoljpkkp = $var;

        return $this;
    }

}
