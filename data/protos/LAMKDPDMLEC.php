<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LAMKDPDMLEC</code>
 */
class LAMKDPDMLEC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 pkjcfcmooje = 13;</code>
     */
    protected $pkjcfcmooje = 0;
    /**
     * Generated from protobuf field <code>uint32 aecpmhpnjln = 1;</code>
     */
    protected $aecpmhpnjln = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $pkjcfcmooje
     *     @type int $aecpmhpnjln
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 pkjcfcmooje = 13;</code>
     * @return int
     */
    public function getPkjcfcmooje()
    {
        return $this->pkjcfcmooje;
    }

    /**
     * Generated from protobuf field <code>uint32 pkjcfcmooje = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setPkjcfcmooje($var)
    {
        GPBUtil::checkUint32($var);
        $this->pkjcfcmooje = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 aecpmhpnjln = 1;</code>
     * @return int
     */
    public function getAecpmhpnjln()
    {
        return $this->aecpmhpnjln;
    }

    /**
     * Generated from protobuf field <code>uint32 aecpmhpnjln = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAecpmhpnjln($var)
    {
        GPBUtil::checkUint32($var);
        $this->aecpmhpnjln = $var;

        return $this;
    }

}

