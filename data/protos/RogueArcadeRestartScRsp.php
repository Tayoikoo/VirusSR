<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FCCFOJLIGGC (7699)
 *
 * Generated from protobuf message <code>RogueArcadeRestartScRsp</code>
 */
class RogueArcadeRestartScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.OFJKOLCKPJL kjbiggihkdp = 14;</code>
     */
    protected $kjbiggihkdp = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \OFJKOLCKPJL $kjbiggihkdp
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.OFJKOLCKPJL kjbiggihkdp = 14;</code>
     * @return \OFJKOLCKPJL|null
     */
    public function getKjbiggihkdp()
    {
        return $this->kjbiggihkdp;
    }

    public function hasKjbiggihkdp()
    {
        return isset($this->kjbiggihkdp);
    }

    public function clearKjbiggihkdp()
    {
        unset($this->kjbiggihkdp);
    }

    /**
     * Generated from protobuf field <code>.OFJKOLCKPJL kjbiggihkdp = 14;</code>
     * @param \OFJKOLCKPJL $var
     * @return $this
     */
    public function setKjbiggihkdp($var)
    {
        GPBUtil::checkMessage($var, \OFJKOLCKPJL::class);
        $this->kjbiggihkdp = $var;

        return $this;
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

}

