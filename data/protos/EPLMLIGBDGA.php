<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EPLMLIGBDGA</code>
 */
class EPLMLIGBDGA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 MKNOCHKFLIF = 13;</code>
     */
    protected $MKNOCHKFLIF = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $MKNOCHKFLIF
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 MKNOCHKFLIF = 13;</code>
     * @return int
     */
    public function getMKNOCHKFLIF()
    {
        return $this->MKNOCHKFLIF;
    }

    /**
     * Generated from protobuf field <code>uint32 MKNOCHKFLIF = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setMKNOCHKFLIF($var)
    {
        GPBUtil::checkUint32($var);
        $this->MKNOCHKFLIF = $var;

        return $this;
    }

}
