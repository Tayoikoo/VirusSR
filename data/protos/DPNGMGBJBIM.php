<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DPNGMGBJBIM</code>
 */
class DPNGMGBJBIM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 FOCLMJPKCHI = 2;</code>
     */
    protected $FOCLMJPKCHI = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $FOCLMJPKCHI
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 FOCLMJPKCHI = 2;</code>
     * @return int
     */
    public function getFOCLMJPKCHI()
    {
        return $this->FOCLMJPKCHI;
    }

    /**
     * Generated from protobuf field <code>uint32 FOCLMJPKCHI = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFOCLMJPKCHI($var)
    {
        GPBUtil::checkUint32($var);
        $this->FOCLMJPKCHI = $var;

        return $this;
    }

}

