<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IOJDMDLKJNM</code>
 */
class IOJDMDLKJNM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 kmnomgmofil = 10;</code>
     */
    protected $kmnomgmofil = 0;
    /**
     * Generated from protobuf field <code>uint32 jhgncibopbe = 13;</code>
     */
    protected $jhgncibopbe = 0;
    /**
     * Generated from protobuf field <code>.PDBDHHCIAAM status = 6;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>uint32 room_id = 1;</code>
     */
    protected $room_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kmnomgmofil
     *     @type int $jhgncibopbe
     *     @type int $status
     *     @type int $room_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 kmnomgmofil = 10;</code>
     * @return int
     */
    public function getKmnomgmofil()
    {
        return $this->kmnomgmofil;
    }

    /**
     * Generated from protobuf field <code>uint32 kmnomgmofil = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setKmnomgmofil($var)
    {
        GPBUtil::checkUint32($var);
        $this->kmnomgmofil = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 jhgncibopbe = 13;</code>
     * @return int
     */
    public function getJhgncibopbe()
    {
        return $this->jhgncibopbe;
    }

    /**
     * Generated from protobuf field <code>uint32 jhgncibopbe = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setJhgncibopbe($var)
    {
        GPBUtil::checkUint32($var);
        $this->jhgncibopbe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PDBDHHCIAAM status = 6;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.PDBDHHCIAAM status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \PDBDHHCIAAM::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 room_id = 1;</code>
     * @return int
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * Generated from protobuf field <code>uint32 room_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRoomId($var)
    {
        GPBUtil::checkUint32($var);
        $this->room_id = $var;

        return $this;
    }

}
