<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DJDACLHNKOC</code>
 */
class DJDACLHNKOC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 EKJNIKMMFLE = 1;</code>
     */
    protected $EKJNIKMMFLE = 0;
    /**
     * Generated from protobuf field <code>uint32 LCEEDIGELGM = 9;</code>
     */
    protected $LCEEDIGELGM = 0;
    /**
     * Generated from protobuf field <code>uint32 JLFLJLKDJDF = 14;</code>
     */
    protected $JLFLJLKDJDF = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $EKJNIKMMFLE
     *     @type int $LCEEDIGELGM
     *     @type int $JLFLJLKDJDF
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 EKJNIKMMFLE = 1;</code>
     * @return int
     */
    public function getEKJNIKMMFLE()
    {
        return $this->EKJNIKMMFLE;
    }

    /**
     * Generated from protobuf field <code>uint32 EKJNIKMMFLE = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setEKJNIKMMFLE($var)
    {
        GPBUtil::checkUint32($var);
        $this->EKJNIKMMFLE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LCEEDIGELGM = 9;</code>
     * @return int
     */
    public function getLCEEDIGELGM()
    {
        return $this->LCEEDIGELGM;
    }

    /**
     * Generated from protobuf field <code>uint32 LCEEDIGELGM = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setLCEEDIGELGM($var)
    {
        GPBUtil::checkUint32($var);
        $this->LCEEDIGELGM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 JLFLJLKDJDF = 14;</code>
     * @return int
     */
    public function getJLFLJLKDJDF()
    {
        return $this->JLFLJLKDJDF;
    }

    /**
     * Generated from protobuf field <code>uint32 JLFLJLKDJDF = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setJLFLJLKDJDF($var)
    {
        GPBUtil::checkUint32($var);
        $this->JLFLJLKDJDF = $var;

        return $this;
    }

}
