<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NJMDBPLBJFB (1024)
 *
 * Generated from protobuf message <code>MultiplayerMatch3FinishScNotify</code>
 */
class MultiplayerMatch3FinishScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 mgkmbmkkkkc = 4;</code>
     */
    protected $mgkmbmkkkkc = 0;
    /**
     * Generated from protobuf field <code>.Match3FinishReason reason = 11;</code>
     */
    protected $reason = 0;
    /**
     * Generated from protobuf field <code>uint32 ifoidmjnhig = 7;</code>
     */
    protected $ifoidmjnhig = 0;
    /**
     * Generated from protobuf field <code>.COKMEFOLDDH bnpfgbeclde = 13;</code>
     */
    protected $bnpfgbeclde = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $mgkmbmkkkkc
     *     @type int $reason
     *     @type int $ifoidmjnhig
     *     @type \COKMEFOLDDH $bnpfgbeclde
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 mgkmbmkkkkc = 4;</code>
     * @return int
     */
    public function getMgkmbmkkkkc()
    {
        return $this->mgkmbmkkkkc;
    }

    /**
     * Generated from protobuf field <code>uint32 mgkmbmkkkkc = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMgkmbmkkkkc($var)
    {
        GPBUtil::checkUint32($var);
        $this->mgkmbmkkkkc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Match3FinishReason reason = 11;</code>
     * @return int
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Generated from protobuf field <code>.Match3FinishReason reason = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkEnum($var, \Match3FinishReason::class);
        $this->reason = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ifoidmjnhig = 7;</code>
     * @return int
     */
    public function getIfoidmjnhig()
    {
        return $this->ifoidmjnhig;
    }

    /**
     * Generated from protobuf field <code>uint32 ifoidmjnhig = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setIfoidmjnhig($var)
    {
        GPBUtil::checkUint32($var);
        $this->ifoidmjnhig = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.COKMEFOLDDH bnpfgbeclde = 13;</code>
     * @return \COKMEFOLDDH|null
     */
    public function getBnpfgbeclde()
    {
        return $this->bnpfgbeclde;
    }

    public function hasBnpfgbeclde()
    {
        return isset($this->bnpfgbeclde);
    }

    public function clearBnpfgbeclde()
    {
        unset($this->bnpfgbeclde);
    }

    /**
     * Generated from protobuf field <code>.COKMEFOLDDH bnpfgbeclde = 13;</code>
     * @param \COKMEFOLDDH $var
     * @return $this
     */
    public function setBnpfgbeclde($var)
    {
        GPBUtil::checkMessage($var, \COKMEFOLDDH::class);
        $this->bnpfgbeclde = $var;

        return $this;
    }

}

