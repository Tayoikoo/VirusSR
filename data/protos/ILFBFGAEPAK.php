<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ILFBFGAEPAK</code>
 */
class ILFBFGAEPAK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string nickname = 4;</code>
     */
    protected $nickname = '';
    /**
     * Generated from protobuf field <code>uint32 CFKBOBJKMFD = 13;</code>
     */
    protected $CFKBOBJKMFD = 0;
    /**
     * Generated from protobuf field <code>.PlatformType platform = 5;</code>
     */
    protected $platform = 0;
    /**
     * Generated from protobuf field <code>string CPEMMCOJKDG = 8;</code>
     */
    protected $CPEMMCOJKDG = '';
    /**
     * Generated from protobuf field <code>uint32 uid = 11;</code>
     */
    protected $uid = 0;
    /**
     * Generated from protobuf field <code>uint32 OEKODDNDJKN = 7;</code>
     */
    protected $OEKODDNDJKN = 0;
    /**
     * Generated from protobuf field <code>string JCAIPEGOGCI = 1;</code>
     */
    protected $JCAIPEGOGCI = '';
    /**
     * Generated from protobuf field <code>uint32 level = 10;</code>
     */
    protected $level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $nickname
     *     @type int $CFKBOBJKMFD
     *     @type int $platform
     *     @type string $CPEMMCOJKDG
     *     @type int $uid
     *     @type int $OEKODDNDJKN
     *     @type string $JCAIPEGOGCI
     *     @type int $level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string nickname = 4;</code>
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Generated from protobuf field <code>string nickname = 4;</code>
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
     * Generated from protobuf field <code>uint32 CFKBOBJKMFD = 13;</code>
     * @return int
     */
    public function getCFKBOBJKMFD()
    {
        return $this->CFKBOBJKMFD;
    }

    /**
     * Generated from protobuf field <code>uint32 CFKBOBJKMFD = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setCFKBOBJKMFD($var)
    {
        GPBUtil::checkUint32($var);
        $this->CFKBOBJKMFD = $var;

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
     * Generated from protobuf field <code>string CPEMMCOJKDG = 8;</code>
     * @return string
     */
    public function getCPEMMCOJKDG()
    {
        return $this->CPEMMCOJKDG;
    }

    /**
     * Generated from protobuf field <code>string CPEMMCOJKDG = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCPEMMCOJKDG($var)
    {
        GPBUtil::checkString($var, True);
        $this->CPEMMCOJKDG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 11;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 11;</code>
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
     * Generated from protobuf field <code>uint32 OEKODDNDJKN = 7;</code>
     * @return int
     */
    public function getOEKODDNDJKN()
    {
        return $this->OEKODDNDJKN;
    }

    /**
     * Generated from protobuf field <code>uint32 OEKODDNDJKN = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setOEKODDNDJKN($var)
    {
        GPBUtil::checkUint32($var);
        $this->OEKODDNDJKN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string JCAIPEGOGCI = 1;</code>
     * @return string
     */
    public function getJCAIPEGOGCI()
    {
        return $this->JCAIPEGOGCI;
    }

    /**
     * Generated from protobuf field <code>string JCAIPEGOGCI = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setJCAIPEGOGCI($var)
    {
        GPBUtil::checkString($var, True);
        $this->JCAIPEGOGCI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 10;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

}

