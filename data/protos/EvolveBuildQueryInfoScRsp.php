<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BAEHAEOFPDF (7150)
 *
 * Generated from protobuf message <code>EvolveBuildQueryInfoScRsp</code>
 */
class EvolveBuildQueryInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.ODABNNDOIGE rogue_current_info = 2;</code>
     */
    protected $rogue_current_info = null;
    /**
     * Generated from protobuf field <code>.EvolveBuildLevelInfo level_info = 15;</code>
     */
    protected $level_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \ODABNNDOIGE $rogue_current_info
     *     @type \EvolveBuildLevelInfo $level_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
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
     * Generated from protobuf field <code>.ODABNNDOIGE rogue_current_info = 2;</code>
     * @return \ODABNNDOIGE|null
     */
    public function getRogueCurrentInfo()
    {
        return $this->rogue_current_info;
    }

    public function hasRogueCurrentInfo()
    {
        return isset($this->rogue_current_info);
    }

    public function clearRogueCurrentInfo()
    {
        unset($this->rogue_current_info);
    }

    /**
     * Generated from protobuf field <code>.ODABNNDOIGE rogue_current_info = 2;</code>
     * @param \ODABNNDOIGE $var
     * @return $this
     */
    public function setRogueCurrentInfo($var)
    {
        GPBUtil::checkMessage($var, \ODABNNDOIGE::class);
        $this->rogue_current_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.EvolveBuildLevelInfo level_info = 15;</code>
     * @return \EvolveBuildLevelInfo|null
     */
    public function getLevelInfo()
    {
        return $this->level_info;
    }

    public function hasLevelInfo()
    {
        return isset($this->level_info);
    }

    public function clearLevelInfo()
    {
        unset($this->level_info);
    }

    /**
     * Generated from protobuf field <code>.EvolveBuildLevelInfo level_info = 15;</code>
     * @param \EvolveBuildLevelInfo $var
     * @return $this
     */
    public function setLevelInfo($var)
    {
        GPBUtil::checkMessage($var, \EvolveBuildLevelInfo::class);
        $this->level_info = $var;

        return $this;
    }

}

