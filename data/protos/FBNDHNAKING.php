<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FBNDHNAKING</code>
 */
class FBNDHNAKING extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool JMFOLKLCJLN = 5;</code>
     */
    protected $JMFOLKLCJLN = false;
    /**
     * Generated from protobuf field <code>uint32 LCEEDIGELGM = 4;</code>
     */
    protected $LCEEDIGELGM = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $JMFOLKLCJLN
     *     @type int $LCEEDIGELGM
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool JMFOLKLCJLN = 5;</code>
     * @return bool
     */
    public function getJMFOLKLCJLN()
    {
        return $this->JMFOLKLCJLN;
    }

    /**
     * Generated from protobuf field <code>bool JMFOLKLCJLN = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setJMFOLKLCJLN($var)
    {
        GPBUtil::checkBool($var);
        $this->JMFOLKLCJLN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LCEEDIGELGM = 4;</code>
     * @return int
     */
    public function getLCEEDIGELGM()
    {
        return $this->LCEEDIGELGM;
    }

    /**
     * Generated from protobuf field <code>uint32 LCEEDIGELGM = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLCEEDIGELGM($var)
    {
        GPBUtil::checkUint32($var);
        $this->LCEEDIGELGM = $var;

        return $this;
    }

}

