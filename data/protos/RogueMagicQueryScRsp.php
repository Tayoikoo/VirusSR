<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LFPPEBGCDAA (7759)
 *
 * Generated from protobuf message <code>RogueMagicQueryScRsp</code>
 */
class RogueMagicQueryScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.NJICCNHCMDK rogue_get_info = 8;</code>
     */
    protected $rogue_get_info = null;
    /**
     * Generated from protobuf field <code>.AGAOOLGMDOO kcfmiidppbh = 7;</code>
     */
    protected $kcfmiidppbh = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \NJICCNHCMDK $rogue_get_info
     *     @type \AGAOOLGMDOO $kcfmiidppbh
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
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

    /**
     * Generated from protobuf field <code>.NJICCNHCMDK rogue_get_info = 8;</code>
     * @return \NJICCNHCMDK|null
     */
    public function getRogueGetInfo()
    {
        return $this->rogue_get_info;
    }

    public function hasRogueGetInfo()
    {
        return isset($this->rogue_get_info);
    }

    public function clearRogueGetInfo()
    {
        unset($this->rogue_get_info);
    }

    /**
     * Generated from protobuf field <code>.NJICCNHCMDK rogue_get_info = 8;</code>
     * @param \NJICCNHCMDK $var
     * @return $this
     */
    public function setRogueGetInfo($var)
    {
        GPBUtil::checkMessage($var, \NJICCNHCMDK::class);
        $this->rogue_get_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AGAOOLGMDOO kcfmiidppbh = 7;</code>
     * @return \AGAOOLGMDOO|null
     */
    public function getKcfmiidppbh()
    {
        return $this->kcfmiidppbh;
    }

    public function hasKcfmiidppbh()
    {
        return isset($this->kcfmiidppbh);
    }

    public function clearKcfmiidppbh()
    {
        unset($this->kcfmiidppbh);
    }

    /**
     * Generated from protobuf field <code>.AGAOOLGMDOO kcfmiidppbh = 7;</code>
     * @param \AGAOOLGMDOO $var
     * @return $this
     */
    public function setKcfmiidppbh($var)
    {
        GPBUtil::checkMessage($var, \AGAOOLGMDOO::class);
        $this->kcfmiidppbh = $var;

        return $this;
    }

}

