<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HNGOJHBPFEJ</code>
 */
class HNGOJHBPFEJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 LCEEDIGELGM = 9;</code>
     */
    protected $LCEEDIGELGM = 0;
    /**
     * Generated from protobuf field <code>uint32 FIEHEKFMFKM = 5;</code>
     */
    protected $FIEHEKFMFKM = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $LCEEDIGELGM
     *     @type int $FIEHEKFMFKM
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
     * Generated from protobuf field <code>uint32 FIEHEKFMFKM = 5;</code>
     * @return int
     */
    public function getFIEHEKFMFKM()
    {
        return $this->FIEHEKFMFKM;
    }

    /**
     * Generated from protobuf field <code>uint32 FIEHEKFMFKM = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setFIEHEKFMFKM($var)
    {
        GPBUtil::checkUint32($var);
        $this->FIEHEKFMFKM = $var;

        return $this;
    }

}
