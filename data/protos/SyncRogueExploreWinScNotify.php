<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GPIMFJEIIAP (1817)
 *
 * Generated from protobuf message <code>SyncRogueExploreWinScNotify</code>
 */
class SyncRogueExploreWinScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool hppclaodclc = 12;</code>
     */
    protected $hppclaodclc = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $hppclaodclc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool hppclaodclc = 12;</code>
     * @return bool
     */
    public function getHppclaodclc()
    {
        return $this->hppclaodclc;
    }

    /**
     * Generated from protobuf field <code>bool hppclaodclc = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setHppclaodclc($var)
    {
        GPBUtil::checkBool($var);
        $this->hppclaodclc = $var;

        return $this;
    }

}
