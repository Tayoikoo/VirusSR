<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IGCNEHPPFDJ</code>
 */
class IGCNEHPPFDJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .LIPOPPCIKOO JJKPEJEEHNG = 2;</code>
     */
    private $JJKPEJEEHNG;
    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\LIPOPPCIKOO>|\Google\Protobuf\Internal\RepeatedField $JJKPEJEEHNG
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .LIPOPPCIKOO JJKPEJEEHNG = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJJKPEJEEHNG()
    {
        return $this->JJKPEJEEHNG;
    }

    /**
     * Generated from protobuf field <code>repeated .LIPOPPCIKOO JJKPEJEEHNG = 2;</code>
     * @param array<\LIPOPPCIKOO>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJJKPEJEEHNG($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \LIPOPPCIKOO::class);
        $this->JJKPEJEEHNG = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
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
