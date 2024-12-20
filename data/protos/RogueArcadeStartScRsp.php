<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EDKOKDJENFH (7700)
 *
 * Generated from protobuf message <code>RogueArcadeStartScRsp</code>
 */
class RogueArcadeStartScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.OFJKOLCKPJL kjbiggihkdp = 6;</code>
     */
    protected $kjbiggihkdp = null;
    /**
     * Generated from protobuf field <code>uint32 room_id = 2;</code>
     */
    protected $room_id = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \OFJKOLCKPJL $kjbiggihkdp
     *     @type int $room_id
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.OFJKOLCKPJL kjbiggihkdp = 6;</code>
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
     * Generated from protobuf field <code>.OFJKOLCKPJL kjbiggihkdp = 6;</code>
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
     * Generated from protobuf field <code>uint32 room_id = 2;</code>
     * @return int
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * Generated from protobuf field <code>uint32 room_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRoomId($var)
    {
        GPBUtil::checkUint32($var);
        $this->room_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
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
