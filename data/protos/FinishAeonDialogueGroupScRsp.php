<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BFEOIJJAFPO (1889)
 *
 * Generated from protobuf message <code>FinishAeonDialogueGroupScRsp</code>
 */
class FinishAeonDialogueGroupScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemList reward = 4;</code>
     */
    protected $reward = null;
    /**
     * Generated from protobuf field <code>.INIBDHGOMEP ijopankcekj = 2;</code>
     */
    protected $ijopankcekj = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemList $reward
     *     @type \INIBDHGOMEP $ijopankcekj
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 4;</code>
     * @return \ItemList|null
     */
    public function getReward()
    {
        return $this->reward;
    }

    public function hasReward()
    {
        return isset($this->reward);
    }

    public function clearReward()
    {
        unset($this->reward);
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 4;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setReward($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->reward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.INIBDHGOMEP ijopankcekj = 2;</code>
     * @return \INIBDHGOMEP|null
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
     * Generated from protobuf field <code>.INIBDHGOMEP ijopankcekj = 2;</code>
     * @param \INIBDHGOMEP $var
     * @return $this
     */
    public function setIjopankcekj($var)
    {
        GPBUtil::checkMessage($var, \INIBDHGOMEP::class);
        $this->ijopankcekj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
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

