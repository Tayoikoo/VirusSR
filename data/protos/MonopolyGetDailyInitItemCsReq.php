<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FEDPAJGKLNG (7063)
 *
 * Generated from protobuf message <code>MonopolyGetDailyInitItemCsReq</code>
 */
class MonopolyGetDailyInitItemCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool cbcdplgpeak = 11;</code>
     */
    protected $cbcdplgpeak = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $cbcdplgpeak
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool cbcdplgpeak = 11;</code>
     * @return bool
     */
    public function getCbcdplgpeak()
    {
        return $this->cbcdplgpeak;
    }

    /**
     * Generated from protobuf field <code>bool cbcdplgpeak = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setCbcdplgpeak($var)
    {
        GPBUtil::checkBool($var);
        $this->cbcdplgpeak = $var;

        return $this;
    }

}

