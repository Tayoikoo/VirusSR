<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JJPMMCJHGLH</code>
 */
class JJPMMCJHGLH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 fmdfaookomg = 13;</code>
     */
    protected $fmdfaookomg = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $fmdfaookomg
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 fmdfaookomg = 13;</code>
     * @return int
     */
    public function getFmdfaookomg()
    {
        return $this->fmdfaookomg;
    }

    /**
     * Generated from protobuf field <code>uint32 fmdfaookomg = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setFmdfaookomg($var)
    {
        GPBUtil::checkUint32($var);
        $this->fmdfaookomg = $var;

        return $this;
    }

}
