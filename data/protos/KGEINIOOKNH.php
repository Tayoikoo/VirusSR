<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KGEINIOOKNH</code>
 */
class KGEINIOOKNH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.JMEOKPPCBHL ANAGKANMOBM = 1;</code>
     */
    protected $ANAGKANMOBM = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \JMEOKPPCBHL $ANAGKANMOBM
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.JMEOKPPCBHL ANAGKANMOBM = 1;</code>
     * @return \JMEOKPPCBHL|null
     */
    public function getANAGKANMOBM()
    {
        return $this->ANAGKANMOBM;
    }

    public function hasANAGKANMOBM()
    {
        return isset($this->ANAGKANMOBM);
    }

    public function clearANAGKANMOBM()
    {
        unset($this->ANAGKANMOBM);
    }

    /**
     * Generated from protobuf field <code>.JMEOKPPCBHL ANAGKANMOBM = 1;</code>
     * @param \JMEOKPPCBHL $var
     * @return $this
     */
    public function setANAGKANMOBM($var)
    {
        GPBUtil::checkMessage($var, \JMEOKPPCBHL::class);
        $this->ANAGKANMOBM = $var;

        return $this;
    }

}
