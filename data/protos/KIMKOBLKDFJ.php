<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KIMKOBLKDFJ</code>
 */
class KIMKOBLKDFJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 record_id = 1;</code>
     */
    protected $record_id = 0;
    /**
     * Generated from protobuf field <code>bool cdklekcjbej = 8;</code>
     */
    protected $cdklekcjbej = false;
    /**
     * Generated from protobuf field <code>repeated uint32 bikcdadjijj = 3;</code>
     */
    private $bikcdadjijj;
    /**
     * Generated from protobuf field <code>uint32 efccjkghjdk = 7;</code>
     */
    protected $efccjkghjdk = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $record_id
     *     @type bool $cdklekcjbej
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $bikcdadjijj
     *     @type int $efccjkghjdk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 record_id = 1;</code>
     * @return int
     */
    public function getRecordId()
    {
        return $this->record_id;
    }

    /**
     * Generated from protobuf field <code>uint32 record_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRecordId($var)
    {
        GPBUtil::checkUint32($var);
        $this->record_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool cdklekcjbej = 8;</code>
     * @return bool
     */
    public function getCdklekcjbej()
    {
        return $this->cdklekcjbej;
    }

    /**
     * Generated from protobuf field <code>bool cdklekcjbej = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setCdklekcjbej($var)
    {
        GPBUtil::checkBool($var);
        $this->cdklekcjbej = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 bikcdadjijj = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBikcdadjijj()
    {
        return $this->bikcdadjijj;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 bikcdadjijj = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBikcdadjijj($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->bikcdadjijj = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 efccjkghjdk = 7;</code>
     * @return int
     */
    public function getEfccjkghjdk()
    {
        return $this->efccjkghjdk;
    }

    /**
     * Generated from protobuf field <code>uint32 efccjkghjdk = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setEfccjkghjdk($var)
    {
        GPBUtil::checkUint32($var);
        $this->efccjkghjdk = $var;

        return $this;
    }

}

