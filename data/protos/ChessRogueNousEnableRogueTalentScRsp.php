<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KJEOELHAGNF (5596)
 *
 * Generated from protobuf message <code>ChessRogueNousEnableRogueTalentScRsp</code>
 */
class ChessRogueNousEnableRogueTalentScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 fjifnmbdjem = 13;</code>
     */
    protected $fjifnmbdjem = 0;
    /**
     * Generated from protobuf field <code>.KFDDOFKHKDJ lgofoilnonl = 8;</code>
     */
    protected $lgofoilnonl = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $fjifnmbdjem
     *     @type \KFDDOFKHKDJ $lgofoilnonl
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 fjifnmbdjem = 13;</code>
     * @return int
     */
    public function getFjifnmbdjem()
    {
        return $this->fjifnmbdjem;
    }

    /**
     * Generated from protobuf field <code>uint32 fjifnmbdjem = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setFjifnmbdjem($var)
    {
        GPBUtil::checkUint32($var);
        $this->fjifnmbdjem = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.KFDDOFKHKDJ lgofoilnonl = 8;</code>
     * @return \KFDDOFKHKDJ|null
     */
    public function getLgofoilnonl()
    {
        return $this->lgofoilnonl;
    }

    public function hasLgofoilnonl()
    {
        return isset($this->lgofoilnonl);
    }

    public function clearLgofoilnonl()
    {
        unset($this->lgofoilnonl);
    }

    /**
     * Generated from protobuf field <code>.KFDDOFKHKDJ lgofoilnonl = 8;</code>
     * @param \KFDDOFKHKDJ $var
     * @return $this
     */
    public function setLgofoilnonl($var)
    {
        GPBUtil::checkMessage($var, \KFDDOFKHKDJ::class);
        $this->lgofoilnonl = $var;

        return $this;
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

}

