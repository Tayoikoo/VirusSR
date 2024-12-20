<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RogueGetInfo</code>
 */
class RogueGetInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.RogueAreaInfo gkebdmbajaj = 3;</code>
     */
    protected $gkebdmbajaj = null;
    /**
     * Generated from protobuf field <code>.RogueGetVirtualItemInfo lmpnoceabnh = 6;</code>
     */
    protected $lmpnoceabnh = null;
    /**
     * Generated from protobuf field <code>.RogueScoreRewardInfo aliiifglpda = 7;</code>
     */
    protected $aliiifglpda = null;
    /**
     * Generated from protobuf field <code>.RogueAeonInfo ijopankcekj = 1;</code>
     */
    protected $ijopankcekj = null;
    /**
     * Generated from protobuf field <code>.RogueSeasonInfo noomdkekgmj = 5;</code>
     */
    protected $noomdkekgmj = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RogueAreaInfo $gkebdmbajaj
     *     @type \RogueGetVirtualItemInfo $lmpnoceabnh
     *     @type \RogueScoreRewardInfo $aliiifglpda
     *     @type \RogueAeonInfo $ijopankcekj
     *     @type \RogueSeasonInfo $noomdkekgmj
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.RogueAreaInfo gkebdmbajaj = 3;</code>
     * @return \RogueAreaInfo|null
     */
    public function getGkebdmbajaj()
    {
        return $this->gkebdmbajaj;
    }

    public function hasGkebdmbajaj()
    {
        return isset($this->gkebdmbajaj);
    }

    public function clearGkebdmbajaj()
    {
        unset($this->gkebdmbajaj);
    }

    /**
     * Generated from protobuf field <code>.RogueAreaInfo gkebdmbajaj = 3;</code>
     * @param \RogueAreaInfo $var
     * @return $this
     */
    public function setGkebdmbajaj($var)
    {
        GPBUtil::checkMessage($var, \RogueAreaInfo::class);
        $this->gkebdmbajaj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.RogueGetVirtualItemInfo lmpnoceabnh = 6;</code>
     * @return \RogueGetVirtualItemInfo|null
     */
    public function getLmpnoceabnh()
    {
        return $this->lmpnoceabnh;
    }

    public function hasLmpnoceabnh()
    {
        return isset($this->lmpnoceabnh);
    }

    public function clearLmpnoceabnh()
    {
        unset($this->lmpnoceabnh);
    }

    /**
     * Generated from protobuf field <code>.RogueGetVirtualItemInfo lmpnoceabnh = 6;</code>
     * @param \RogueGetVirtualItemInfo $var
     * @return $this
     */
    public function setLmpnoceabnh($var)
    {
        GPBUtil::checkMessage($var, \RogueGetVirtualItemInfo::class);
        $this->lmpnoceabnh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.RogueScoreRewardInfo aliiifglpda = 7;</code>
     * @return \RogueScoreRewardInfo|null
     */
    public function getAliiifglpda()
    {
        return $this->aliiifglpda;
    }

    public function hasAliiifglpda()
    {
        return isset($this->aliiifglpda);
    }

    public function clearAliiifglpda()
    {
        unset($this->aliiifglpda);
    }

    /**
     * Generated from protobuf field <code>.RogueScoreRewardInfo aliiifglpda = 7;</code>
     * @param \RogueScoreRewardInfo $var
     * @return $this
     */
    public function setAliiifglpda($var)
    {
        GPBUtil::checkMessage($var, \RogueScoreRewardInfo::class);
        $this->aliiifglpda = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.RogueAeonInfo ijopankcekj = 1;</code>
     * @return \RogueAeonInfo|null
     */
    public function getIjopankcekj()
    {
        return $this->ijopankcekj;
    }

    public function hasIjopankcekj()
    {
        return isset($this->ijopankcekj);
    }

    public function clearIjopankcekj()
    {
        unset($this->ijopankcekj);
    }

    /**
     * Generated from protobuf field <code>.RogueAeonInfo ijopankcekj = 1;</code>
     * @param \RogueAeonInfo $var
     * @return $this
     */
    public function setIjopankcekj($var)
    {
        GPBUtil::checkMessage($var, \RogueAeonInfo::class);
        $this->ijopankcekj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.RogueSeasonInfo noomdkekgmj = 5;</code>
     * @return \RogueSeasonInfo|null
     */
    public function getNoomdkekgmj()
    {
        return $this->noomdkekgmj;
    }

    public function hasNoomdkekgmj()
    {
        return isset($this->noomdkekgmj);
    }

    public function clearNoomdkekgmj()
    {
        unset($this->noomdkekgmj);
    }

    /**
     * Generated from protobuf field <code>.RogueSeasonInfo noomdkekgmj = 5;</code>
     * @param \RogueSeasonInfo $var
     * @return $this
     */
    public function setNoomdkekgmj($var)
    {
        GPBUtil::checkMessage($var, \RogueSeasonInfo::class);
        $this->noomdkekgmj = $var;

        return $this;
    }

}

