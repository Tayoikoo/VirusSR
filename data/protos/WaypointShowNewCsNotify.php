<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IAOEJJICILB (452)
 *
 * Generated from protobuf message <code>WaypointShowNewCsNotify</code>
 */
class WaypointShowNewCsNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ambcbclhihj = 12;</code>
     */
    protected $ambcbclhihj = 0;
    /**
     * Generated from protobuf field <code>uint32 kmaagdfakni = 1;</code>
     */
    protected $kmaagdfakni = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ambcbclhihj
     *     @type int $kmaagdfakni
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ambcbclhihj = 12;</code>
     * @return int
     */
    public function getAmbcbclhihj()
    {
        return $this->ambcbclhihj;
    }

    /**
     * Generated from protobuf field <code>uint32 ambcbclhihj = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setAmbcbclhihj($var)
    {
        GPBUtil::checkUint32($var);
        $this->ambcbclhihj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 kmaagdfakni = 1;</code>
     * @return int
     */
    public function getKmaagdfakni()
    {
        return $this->kmaagdfakni;
    }

    /**
     * Generated from protobuf field <code>uint32 kmaagdfakni = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKmaagdfakni($var)
    {
        GPBUtil::checkUint32($var);
        $this->kmaagdfakni = $var;

        return $this;
    }

}

