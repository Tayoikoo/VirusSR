<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LPHFBIELLLB</code>
 */
class LPHFBIELLLB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 HFKJLKNLFOE = 5;</code>
     */
    private $HFKJLKNLFOE;
    /**
     * Generated from protobuf field <code>repeated uint32 HENIKPBCKGC = 12;</code>
     */
    private $HENIKPBCKGC;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $HFKJLKNLFOE
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $HENIKPBCKGC
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HFKJLKNLFOE = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHFKJLKNLFOE()
    {
        return $this->HFKJLKNLFOE;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HFKJLKNLFOE = 5;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHFKJLKNLFOE($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->HFKJLKNLFOE = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HENIKPBCKGC = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHENIKPBCKGC()
    {
        return $this->HENIKPBCKGC;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HENIKPBCKGC = 12;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHENIKPBCKGC($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->HENIKPBCKGC = $arr;

        return $this;
    }

}

