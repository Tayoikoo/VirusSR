<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MKNAGNGBFOI</code>
 */
class MKNAGNGBFOI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.MEDPDEALGMJ pos = 4;</code>
     */
    protected $pos = 0;
    /**
     * Generated from protobuf field <code>uint32 pomeofhemgh = 12;</code>
     */
    protected $pomeofhemgh = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $pos
     *     @type int $pomeofhemgh
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.MEDPDEALGMJ pos = 4;</code>
     * @return int
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * Generated from protobuf field <code>.MEDPDEALGMJ pos = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPos($var)
    {
        GPBUtil::checkEnum($var, \MEDPDEALGMJ::class);
        $this->pos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 pomeofhemgh = 12;</code>
     * @return int
     */
    public function getPomeofhemgh()
    {
        return $this->pomeofhemgh;
    }

    /**
     * Generated from protobuf field <code>uint32 pomeofhemgh = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setPomeofhemgh($var)
    {
        GPBUtil::checkUint32($var);
        $this->pomeofhemgh = $var;

        return $this;
    }

}

