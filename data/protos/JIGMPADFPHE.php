<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JIGMPADFPHE</code>
 */
class JIGMPADFPHE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 PBALFFCFPJD = 10;</code>
     */
    protected $PBALFFCFPJD = 0;
    /**
     * Generated from protobuf field <code>bool HJCGEIDBICC = 5;</code>
     */
    protected $HJCGEIDBICC = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $PBALFFCFPJD
     *     @type bool $HJCGEIDBICC
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 PBALFFCFPJD = 10;</code>
     * @return int
     */
    public function getPBALFFCFPJD()
    {
        return $this->PBALFFCFPJD;
    }

    /**
     * Generated from protobuf field <code>uint32 PBALFFCFPJD = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setPBALFFCFPJD($var)
    {
        GPBUtil::checkUint32($var);
        $this->PBALFFCFPJD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool HJCGEIDBICC = 5;</code>
     * @return bool
     */
    public function getHJCGEIDBICC()
    {
        return $this->HJCGEIDBICC;
    }

    /**
     * Generated from protobuf field <code>bool HJCGEIDBICC = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setHJCGEIDBICC($var)
    {
        GPBUtil::checkBool($var);
        $this->HJCGEIDBICC = $var;

        return $this;
    }

}

