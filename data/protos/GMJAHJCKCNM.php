<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GMJAHJCKCNM</code>
 */
class GMJAHJCKCNM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool GEONCFHOBJL = 1;</code>
     */
    protected $GEONCFHOBJL = false;
    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 14;</code>
     */
    protected $OFAGGKBMPJN = 0;
    /**
     * Generated from protobuf field <code>uint32 JONANHLLJHN = 9;</code>
     */
    protected $JONANHLLJHN = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $GEONCFHOBJL
     *     @type int $OFAGGKBMPJN
     *     @type int $JONANHLLJHN
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool GEONCFHOBJL = 1;</code>
     * @return bool
     */
    public function getGEONCFHOBJL()
    {
        return $this->GEONCFHOBJL;
    }

    /**
     * Generated from protobuf field <code>bool GEONCFHOBJL = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setGEONCFHOBJL($var)
    {
        GPBUtil::checkBool($var);
        $this->GEONCFHOBJL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 14;</code>
     * @return int
     */
    public function getOFAGGKBMPJN()
    {
        return $this->OFAGGKBMPJN;
    }

    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setOFAGGKBMPJN($var)
    {
        GPBUtil::checkUint32($var);
        $this->OFAGGKBMPJN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 JONANHLLJHN = 9;</code>
     * @return int
     */
    public function getJONANHLLJHN()
    {
        return $this->JONANHLLJHN;
    }

    /**
     * Generated from protobuf field <code>uint32 JONANHLLJHN = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setJONANHLLJHN($var)
    {
        GPBUtil::checkUint32($var);
        $this->JONANHLLJHN = $var;

        return $this;
    }

}

