<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EGCDAGLJMDH</code>
 */
class EGCDAGLJMDH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 GHFBLPDAJEI = 10;</code>
     */
    protected $GHFBLPDAJEI = 0;
    /**
     * Generated from protobuf field <code>uint32 IDGALMEGDIJ = 3;</code>
     */
    protected $IDGALMEGDIJ = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GHFBLPDAJEI
     *     @type int $IDGALMEGDIJ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 GHFBLPDAJEI = 10;</code>
     * @return int
     */
    public function getGHFBLPDAJEI()
    {
        return $this->GHFBLPDAJEI;
    }

    /**
     * Generated from protobuf field <code>uint32 GHFBLPDAJEI = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setGHFBLPDAJEI($var)
    {
        GPBUtil::checkUint32($var);
        $this->GHFBLPDAJEI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 IDGALMEGDIJ = 3;</code>
     * @return int
     */
    public function getIDGALMEGDIJ()
    {
        return $this->IDGALMEGDIJ;
    }

    /**
     * Generated from protobuf field <code>uint32 IDGALMEGDIJ = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setIDGALMEGDIJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->IDGALMEGDIJ = $var;

        return $this;
    }

}

