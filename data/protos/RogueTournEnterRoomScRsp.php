<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JDDJJFIJDNI (6036)
 *
 * Generated from protobuf message <code>RogueTournEnterRoomScRsp</code>
 */
class RogueTournEnterRoomScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.KHEJPIHJFAF kjbiggihkdp = 4;</code>
     */
    protected $kjbiggihkdp = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \KHEJPIHJFAF $kjbiggihkdp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
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
     * Generated from protobuf field <code>.KHEJPIHJFAF kjbiggihkdp = 4;</code>
     * @return \KHEJPIHJFAF|null
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
     * Generated from protobuf field <code>.KHEJPIHJFAF kjbiggihkdp = 4;</code>
     * @param \KHEJPIHJFAF $var
     * @return $this
     */
    public function setKjbiggihkdp($var)
    {
        GPBUtil::checkMessage($var, \KHEJPIHJFAF::class);
        $this->kjbiggihkdp = $var;

        return $this;
    }

}

