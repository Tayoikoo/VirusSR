<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JMMPEKPEDNL (8195)
 *
 * Generated from protobuf message <code>GetMarkChestScRsp</code>
 */
class GetMarkChestScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .AGMCNEJANDK najmejjhaek = 11;</code>
     */
    private $najmejjhaek;
    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\AGMCNEJANDK>|\Google\Protobuf\Internal\RepeatedField $najmejjhaek
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .AGMCNEJANDK najmejjhaek = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNajmejjhaek()
    {
        return $this->najmejjhaek;
    }

    /**
     * Generated from protobuf field <code>repeated .AGMCNEJANDK najmejjhaek = 11;</code>
     * @param array<\AGMCNEJANDK>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNajmejjhaek($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AGMCNEJANDK::class);
        $this->najmejjhaek = $arr;

        return $this;
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

}

