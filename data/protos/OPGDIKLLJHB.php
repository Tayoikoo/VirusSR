<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OPGDIKLLJHB</code>
 */
class OPGDIKLLJHB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 11;</code>
     */
    protected $LGBJLFEMFOL = 0;
    /**
     * Generated from protobuf field <code>uint32 EMEJDLCLHBP = 9;</code>
     */
    protected $EMEJDLCLHBP = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $LGBJLFEMFOL
     *     @type int $EMEJDLCLHBP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 11;</code>
     * @return int
     */
    public function getLGBJLFEMFOL()
    {
        return $this->LGBJLFEMFOL;
    }

    /**
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setLGBJLFEMFOL($var)
    {
        GPBUtil::checkUint32($var);
        $this->LGBJLFEMFOL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 EMEJDLCLHBP = 9;</code>
     * @return int
     */
    public function getEMEJDLCLHBP()
    {
        return $this->EMEJDLCLHBP;
    }

    /**
     * Generated from protobuf field <code>uint32 EMEJDLCLHBP = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setEMEJDLCLHBP($var)
    {
        GPBUtil::checkUint32($var);
        $this->EMEJDLCLHBP = $var;

        return $this;
    }

}

