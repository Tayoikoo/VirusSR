<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BGPBJHIHFOM</code>
 */
class BGPBJHIHFOM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 LJLAFPFJHPF = 13;</code>
     */
    protected $LJLAFPFJHPF = 0;
    /**
     * Generated from protobuf field <code>uint32 IOJIPJMLDMN = 7;</code>
     */
    protected $IOJIPJMLDMN = 0;
    /**
     * Generated from protobuf field <code>uint32 NNDEJJDCIAK = 3;</code>
     */
    protected $NNDEJJDCIAK = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $LJLAFPFJHPF
     *     @type int $IOJIPJMLDMN
     *     @type int $NNDEJJDCIAK
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 LJLAFPFJHPF = 13;</code>
     * @return int
     */
    public function getLJLAFPFJHPF()
    {
        return $this->LJLAFPFJHPF;
    }

    /**
     * Generated from protobuf field <code>uint32 LJLAFPFJHPF = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setLJLAFPFJHPF($var)
    {
        GPBUtil::checkUint32($var);
        $this->LJLAFPFJHPF = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 IOJIPJMLDMN = 7;</code>
     * @return int
     */
    public function getIOJIPJMLDMN()
    {
        return $this->IOJIPJMLDMN;
    }

    /**
     * Generated from protobuf field <code>uint32 IOJIPJMLDMN = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setIOJIPJMLDMN($var)
    {
        GPBUtil::checkUint32($var);
        $this->IOJIPJMLDMN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NNDEJJDCIAK = 3;</code>
     * @return int
     */
    public function getNNDEJJDCIAK()
    {
        return $this->NNDEJJDCIAK;
    }

    /**
     * Generated from protobuf field <code>uint32 NNDEJJDCIAK = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNNDEJJDCIAK($var)
    {
        GPBUtil::checkUint32($var);
        $this->NNDEJJDCIAK = $var;

        return $this;
    }

}

