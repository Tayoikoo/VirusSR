<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JDONMNBBBBM</code>
 */
class JDONMNBBBBM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 LCEEDIGELGM = 9;</code>
     */
    protected $LCEEDIGELGM = 0;
    /**
     * Generated from protobuf field <code>.KCDHBDLNGHJ CAMPFPOOBKJ = 7;</code>
     */
    protected $CAMPFPOOBKJ = 0;
    /**
     * Generated from protobuf field <code>uint32 EKJNIKMMFLE = 1;</code>
     */
    protected $EKJNIKMMFLE = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $LCEEDIGELGM
     *     @type int $CAMPFPOOBKJ
     *     @type int $EKJNIKMMFLE
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
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
     * Generated from protobuf field <code>.KCDHBDLNGHJ CAMPFPOOBKJ = 7;</code>
     * @return int
     */
    public function getCAMPFPOOBKJ()
    {
        return $this->CAMPFPOOBKJ;
    }

    /**
     * Generated from protobuf field <code>.KCDHBDLNGHJ CAMPFPOOBKJ = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setCAMPFPOOBKJ($var)
    {
        GPBUtil::checkEnum($var, \KCDHBDLNGHJ::class);
        $this->CAMPFPOOBKJ = $var;

        return $this;
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

}

