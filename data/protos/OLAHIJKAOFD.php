<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OLAHIJKAOFD</code>
 */
class OLAHIJKAOFD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 hcpaphboaap = 13;</code>
     */
    private $hcpaphboaap;
    /**
     * Generated from protobuf field <code>repeated uint32 hiffklcdege = 10;</code>
     */
    private $hiffklcdege;
    /**
     * Generated from protobuf field <code>uint32 lilkmfldcje = 1;</code>
     */
    protected $lilkmfldcje = 0;
    /**
     * Generated from protobuf field <code>uint32 mheppegbkfi = 12;</code>
     */
    protected $mheppegbkfi = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $hcpaphboaap
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $hiffklcdege
     *     @type int $lilkmfldcje
     *     @type int $mheppegbkfi
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 hcpaphboaap = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHcpaphboaap()
    {
        return $this->hcpaphboaap;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 hcpaphboaap = 13;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHcpaphboaap($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->hcpaphboaap = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 hiffklcdege = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHiffklcdege()
    {
        return $this->hiffklcdege;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 hiffklcdege = 10;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHiffklcdege($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->hiffklcdege = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lilkmfldcje = 1;</code>
     * @return int
     */
    public function getLilkmfldcje()
    {
        return $this->lilkmfldcje;
    }

    /**
     * Generated from protobuf field <code>uint32 lilkmfldcje = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLilkmfldcje($var)
    {
        GPBUtil::checkUint32($var);
        $this->lilkmfldcje = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 mheppegbkfi = 12;</code>
     * @return int
     */
    public function getMheppegbkfi()
    {
        return $this->mheppegbkfi;
    }

    /**
     * Generated from protobuf field <code>uint32 mheppegbkfi = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setMheppegbkfi($var)
    {
        GPBUtil::checkUint32($var);
        $this->mheppegbkfi = $var;

        return $this;
    }

}

