<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BLOEOEDIKAD</code>
 */
class BLOEOEDIKAD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 nhonhiimpcg = 8;</code>
     */
    protected $nhonhiimpcg = 0;
    /**
     * Generated from protobuf field <code>bool is_taken_reward = 12;</code>
     */
    protected $is_taken_reward = false;
    /**
     * Generated from protobuf field <code>bool bkfoglfcdhe = 4;</code>
     */
    protected $bkfoglfcdhe = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $nhonhiimpcg
     *     @type bool $is_taken_reward
     *     @type bool $bkfoglfcdhe
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 nhonhiimpcg = 8;</code>
     * @return int|string
     */
    public function getNhonhiimpcg()
    {
        return $this->nhonhiimpcg;
    }

    /**
     * Generated from protobuf field <code>uint64 nhonhiimpcg = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNhonhiimpcg($var)
    {
        GPBUtil::checkUint64($var);
        $this->nhonhiimpcg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_taken_reward = 12;</code>
     * @return bool
     */
    public function getIsTakenReward()
    {
        return $this->is_taken_reward;
    }

    /**
     * Generated from protobuf field <code>bool is_taken_reward = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsTakenReward($var)
    {
        GPBUtil::checkBool($var);
        $this->is_taken_reward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool bkfoglfcdhe = 4;</code>
     * @return bool
     */
    public function getBkfoglfcdhe()
    {
        return $this->bkfoglfcdhe;
    }

    /**
     * Generated from protobuf field <code>bool bkfoglfcdhe = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setBkfoglfcdhe($var)
    {
        GPBUtil::checkBool($var);
        $this->bkfoglfcdhe = $var;

        return $this;
    }

}

