<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GFENNLHONCE (7146)
 *
 * Generated from protobuf message <code>EvolveBuildLeaveScRsp</code>
 */
class EvolveBuildLeaveScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.EvolveBuildLevelInfo level_info = 14;</code>
     */
    protected $level_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \EvolveBuildLevelInfo $level_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
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
     * Generated from protobuf field <code>.EvolveBuildLevelInfo level_info = 14;</code>
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
     * Generated from protobuf field <code>.EvolveBuildLevelInfo level_info = 14;</code>
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

