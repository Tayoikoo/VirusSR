<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GDBPCLPHBOL</code>
 */
class GDBPCLPHBOL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.HLACNGEHMJM ELIKGGMJILC = 2;</code>
     */
    protected $ELIKGGMJILC = 0;
    /**
     * Generated from protobuf field <code>uint32 KNBOHELCKOL = 9;</code>
     */
    protected $KNBOHELCKOL = 0;
    /**
     * Generated from protobuf field <code>uint32 IPLDLHHAINL = 10;</code>
     */
    protected $IPLDLHHAINL = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ELIKGGMJILC
     *     @type int $KNBOHELCKOL
     *     @type int $IPLDLHHAINL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.HLACNGEHMJM ELIKGGMJILC = 2;</code>
     * @return int
     */
    public function getELIKGGMJILC()
    {
        return $this->ELIKGGMJILC;
    }

    /**
     * Generated from protobuf field <code>.HLACNGEHMJM ELIKGGMJILC = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setELIKGGMJILC($var)
    {
        GPBUtil::checkEnum($var, \HLACNGEHMJM::class);
        $this->ELIKGGMJILC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 KNBOHELCKOL = 9;</code>
     * @return int
     */
    public function getKNBOHELCKOL()
    {
        return $this->KNBOHELCKOL;
    }

    /**
     * Generated from protobuf field <code>uint32 KNBOHELCKOL = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setKNBOHELCKOL($var)
    {
        GPBUtil::checkUint32($var);
        $this->KNBOHELCKOL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 IPLDLHHAINL = 10;</code>
     * @return int
     */
    public function getIPLDLHHAINL()
    {
        return $this->IPLDLHHAINL;
    }

    /**
     * Generated from protobuf field <code>uint32 IPLDLHHAINL = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setIPLDLHHAINL($var)
    {
        GPBUtil::checkUint32($var);
        $this->IPLDLHHAINL = $var;

        return $this;
    }

}

