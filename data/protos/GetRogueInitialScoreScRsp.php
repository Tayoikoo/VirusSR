<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BEPPPGCPFNA (1811)
 *
 * Generated from protobuf message <code>GetRogueInitialScoreScRsp</code>
 */
class GetRogueInitialScoreScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.RogueScoreRewardInfo aliiifglpda = 4;</code>
     */
    protected $aliiifglpda = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RogueScoreRewardInfo $aliiifglpda
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.RogueScoreRewardInfo aliiifglpda = 4;</code>
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
     * Generated from protobuf field <code>.RogueScoreRewardInfo aliiifglpda = 4;</code>
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
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}

