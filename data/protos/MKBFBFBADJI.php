<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MKBFBFBADJI</code>
 */
class MKBFBFBADJI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 kjkpmffamfk = 13;</code>
     */
    protected $kjkpmffamfk = 0;
    /**
     * Generated from protobuf field <code>bool hdmfplocpmk = 9;</code>
     */
    protected $hdmfplocpmk = false;
    /**
     * Generated from protobuf field <code>repeated uint32 jilabllnjcg = 4;</code>
     */
    private $jilabllnjcg;
    /**
     * Generated from protobuf field <code>bool is_taken_reward = 5;</code>
     */
    protected $is_taken_reward = false;
    /**
     * Generated from protobuf field <code>bool kphgmoidfnd = 3;</code>
     */
    protected $kphgmoidfnd = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kjkpmffamfk
     *     @type bool $hdmfplocpmk
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $jilabllnjcg
     *     @type bool $is_taken_reward
     *     @type bool $kphgmoidfnd
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 kjkpmffamfk = 13;</code>
     * @return int
     */
    public function getKjkpmffamfk()
    {
        return $this->kjkpmffamfk;
    }

    /**
     * Generated from protobuf field <code>uint32 kjkpmffamfk = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setKjkpmffamfk($var)
    {
        GPBUtil::checkUint32($var);
        $this->kjkpmffamfk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool hdmfplocpmk = 9;</code>
     * @return bool
     */
    public function getHdmfplocpmk()
    {
        return $this->hdmfplocpmk;
    }

    /**
     * Generated from protobuf field <code>bool hdmfplocpmk = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setHdmfplocpmk($var)
    {
        GPBUtil::checkBool($var);
        $this->hdmfplocpmk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 jilabllnjcg = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJilabllnjcg()
    {
        return $this->jilabllnjcg;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 jilabllnjcg = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJilabllnjcg($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->jilabllnjcg = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_taken_reward = 5;</code>
     * @return bool
     */
    public function getIsTakenReward()
    {
        return $this->is_taken_reward;
    }

    /**
     * Generated from protobuf field <code>bool is_taken_reward = 5;</code>
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
     * Generated from protobuf field <code>bool kphgmoidfnd = 3;</code>
     * @return bool
     */
    public function getKphgmoidfnd()
    {
        return $this->kphgmoidfnd;
    }

    /**
     * Generated from protobuf field <code>bool kphgmoidfnd = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setKphgmoidfnd($var)
    {
        GPBUtil::checkBool($var);
        $this->kphgmoidfnd = $var;

        return $this;
    }

}

