<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JLFEMALPKGB</code>
 */
class JLFEMALPKGB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 HLPCGIFLIIO = 7;</code>
     */
    private $HLPCGIFLIIO;
    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $HLPCGIFLIIO
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HLPCGIFLIIO = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHLPCGIFLIIO()
    {
        return $this->HLPCGIFLIIO;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HLPCGIFLIIO = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHLPCGIFLIIO($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->HLPCGIFLIIO = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
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

