<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MEDPAMLOEMC</code>
 */
class MEDPAMLOEMC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 fleciglmfdp = 13;</code>
     */
    protected $fleciglmfdp = 0;
    /**
     * Generated from protobuf field <code>uint32 kdcjgfanjdg = 2;</code>
     */
    protected $kdcjgfanjdg = 0;
    /**
     * Generated from protobuf field <code>map<uint32, uint32> eldncgealki = 14;</code>
     */
    private $eldncgealki;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $fleciglmfdp
     *     @type int $kdcjgfanjdg
     *     @type array|\Google\Protobuf\Internal\MapField $eldncgealki
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 fleciglmfdp = 13;</code>
     * @return int
     */
    public function getFleciglmfdp()
    {
        return $this->fleciglmfdp;
    }

    /**
     * Generated from protobuf field <code>uint32 fleciglmfdp = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setFleciglmfdp($var)
    {
        GPBUtil::checkUint32($var);
        $this->fleciglmfdp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 kdcjgfanjdg = 2;</code>
     * @return int
     */
    public function getKdcjgfanjdg()
    {
        return $this->kdcjgfanjdg;
    }

    /**
     * Generated from protobuf field <code>uint32 kdcjgfanjdg = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setKdcjgfanjdg($var)
    {
        GPBUtil::checkUint32($var);
        $this->kdcjgfanjdg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> eldncgealki = 14;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getEldncgealki()
    {
        return $this->eldncgealki;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> eldncgealki = 14;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setEldncgealki($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->eldncgealki = $arr;

        return $this;
    }

}

