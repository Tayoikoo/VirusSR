<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KGFMLLJBMOF (7795)
 *
 * Generated from protobuf message <code>RogueMagicStartScRsp</code>
 */
class RogueMagicStartScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.AGAOOLGMDOO kcfmiidppbh = 3;</code>
     */
    protected $kcfmiidppbh = null;
    /**
     * Generated from protobuf field <code>.KLGIDKPMIBH kjbiggihkdp = 12;</code>
     */
    protected $kjbiggihkdp = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \AGAOOLGMDOO $kcfmiidppbh
     *     @type \KLGIDKPMIBH $kjbiggihkdp
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.AGAOOLGMDOO kcfmiidppbh = 3;</code>
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
     * Generated from protobuf field <code>.AGAOOLGMDOO kcfmiidppbh = 3;</code>
     * @param \AGAOOLGMDOO $var
     * @return $this
     */
    public function setKcfmiidppbh($var)
    {
        GPBUtil::checkMessage($var, \AGAOOLGMDOO::class);
        $this->kcfmiidppbh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.KLGIDKPMIBH kjbiggihkdp = 12;</code>
     * @return \KLGIDKPMIBH|null
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
     * Generated from protobuf field <code>.KLGIDKPMIBH kjbiggihkdp = 12;</code>
     * @param \KLGIDKPMIBH $var
     * @return $this
     */
    public function setKjbiggihkdp($var)
    {
        GPBUtil::checkMessage($var, \KLGIDKPMIBH::class);
        $this->kjbiggihkdp = $var;

        return $this;
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

}

