<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OJJEINMCHDC</code>
 */
class OJJEINMCHDC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.JDCEDDGFBGF HECJONEKFOK = 7;</code>
     */
    protected $HECJONEKFOK = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \JDCEDDGFBGF $HECJONEKFOK
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.JDCEDDGFBGF HECJONEKFOK = 7;</code>
     * @return \JDCEDDGFBGF|null
     */
    public function getHECJONEKFOK()
    {
        return $this->HECJONEKFOK;
    }

    public function hasHECJONEKFOK()
    {
        return isset($this->HECJONEKFOK);
    }

    public function clearHECJONEKFOK()
    {
        unset($this->HECJONEKFOK);
    }

    /**
     * Generated from protobuf field <code>.JDCEDDGFBGF HECJONEKFOK = 7;</code>
     * @param \JDCEDDGFBGF $var
     * @return $this
     */
    public function setHECJONEKFOK($var)
    {
        GPBUtil::checkMessage($var, \JDCEDDGFBGF::class);
        $this->HECJONEKFOK = $var;

        return $this;
    }

}

