<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PGHAFCDCNHH</code>
 */
class PGHAFCDCNHH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 uid = 1;</code>
     */
    protected $uid = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>string nickname = 3;</code>
     */
    protected $nickname = '';
    /**
     * Generated from protobuf field <code>uint32 PDFLEIJNPEB = 4;</code>
     */
    protected $PDFLEIJNPEB = 0;
    /**
     * Generated from protobuf field <code>.PlatformType platform = 5;</code>
     */
    protected $platform = 0;
    /**
     * Generated from protobuf field <code>string POOJFEBMGKF = 6;</code>
     */
    protected $POOJFEBMGKF = '';
    /**
     * Generated from protobuf field <code>string MIHKADCOCFM = 7;</code>
     */
    protected $MIHKADCOCFM = '';
    /**
     * Generated from protobuf field <code>uint64 version = 8;</code>
     */
    protected $version = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $uid
     *     @type int $level
     *     @type string $nickname
     *     @type int $PDFLEIJNPEB
     *     @type int $platform
     *     @type string $POOJFEBMGKF
     *     @type string $MIHKADCOCFM
     *     @type int|string $version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 1;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string nickname = 3;</code>
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Generated from protobuf field <code>string nickname = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNickname($var)
    {
        GPBUtil::checkString($var, True);
        $this->nickname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 PDFLEIJNPEB = 4;</code>
     * @return int
     */
    public function getPDFLEIJNPEB()
    {
        return $this->PDFLEIJNPEB;
    }

    /**
     * Generated from protobuf field <code>uint32 PDFLEIJNPEB = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPDFLEIJNPEB($var)
    {
        GPBUtil::checkUint32($var);
        $this->PDFLEIJNPEB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PlatformType platform = 5;</code>
     * @return int
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Generated from protobuf field <code>.PlatformType platform = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPlatform($var)
    {
        GPBUtil::checkEnum($var, \PlatformType::class);
        $this->platform = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string POOJFEBMGKF = 6;</code>
     * @return string
     */
    public function getPOOJFEBMGKF()
    {
        return $this->POOJFEBMGKF;
    }

    /**
     * Generated from protobuf field <code>string POOJFEBMGKF = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPOOJFEBMGKF($var)
    {
        GPBUtil::checkString($var, True);
        $this->POOJFEBMGKF = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string MIHKADCOCFM = 7;</code>
     * @return string
     */
    public function getMIHKADCOCFM()
    {
        return $this->MIHKADCOCFM;
    }

    /**
     * Generated from protobuf field <code>string MIHKADCOCFM = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setMIHKADCOCFM($var)
    {
        GPBUtil::checkString($var, True);
        $this->MIHKADCOCFM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 version = 8;</code>
     * @return int|string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>uint64 version = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkUint64($var);
        $this->version = $var;

        return $this;
    }

}

