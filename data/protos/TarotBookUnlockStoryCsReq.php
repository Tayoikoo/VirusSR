<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EANFGAKDIPC (8157)
 *
 * Generated from protobuf message <code>TarotBookUnlockStoryCsReq</code>
 */
class TarotBookUnlockStoryCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 eifbkojdedh = 12;</code>
     */
    private $eifbkojdedh;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $eifbkojdedh
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 eifbkojdedh = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEifbkojdedh()
    {
        return $this->eifbkojdedh;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 eifbkojdedh = 12;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEifbkojdedh($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->eifbkojdedh = $arr;

        return $this;
    }

}

