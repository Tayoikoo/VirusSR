<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OLGKJDLMEIO</code>
 */
class OLGKJDLMEIO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<uint32, uint32> fmohpibgbka = 1;</code>
     */
    private $fmohpibgbka;
    /**
     * Generated from protobuf field <code>uint32 dkhgchahomk = 2;</code>
     */
    protected $dkhgchahomk = 0;
    /**
     * Generated from protobuf field <code>uint32 ldlkicepblb = 3;</code>
     */
    protected $ldlkicepblb = 0;
    /**
     * Generated from protobuf field <code>uint32 kkhmdcjoimb = 4;</code>
     */
    protected $kkhmdcjoimb = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $fmohpibgbka
     *     @type int $dkhgchahomk
     *     @type int $ldlkicepblb
     *     @type int $kkhmdcjoimb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> fmohpibgbka = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getFmohpibgbka()
    {
        return $this->fmohpibgbka;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> fmohpibgbka = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setFmohpibgbka($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->fmohpibgbka = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dkhgchahomk = 2;</code>
     * @return int
     */
    public function getDkhgchahomk()
    {
        return $this->dkhgchahomk;
    }

    /**
     * Generated from protobuf field <code>uint32 dkhgchahomk = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDkhgchahomk($var)
    {
        GPBUtil::checkUint32($var);
        $this->dkhgchahomk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ldlkicepblb = 3;</code>
     * @return int
     */
    public function getLdlkicepblb()
    {
        return $this->ldlkicepblb;
    }

    /**
     * Generated from protobuf field <code>uint32 ldlkicepblb = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLdlkicepblb($var)
    {
        GPBUtil::checkUint32($var);
        $this->ldlkicepblb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 kkhmdcjoimb = 4;</code>
     * @return int
     */
    public function getKkhmdcjoimb()
    {
        return $this->kkhmdcjoimb;
    }

    /**
     * Generated from protobuf field <code>uint32 kkhmdcjoimb = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setKkhmdcjoimb($var)
    {
        GPBUtil::checkUint32($var);
        $this->kkhmdcjoimb = $var;

        return $this;
    }

}

