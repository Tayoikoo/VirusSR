<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LGCOCFPOKIM (75)
 *
 * Generated from protobuf message <code>GetAuthkeyScRsp</code>
 */
class GetAuthkeyScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ddckifefchd = 1;</code>
     */
    protected $ddckifefchd = '';
    /**
     * Generated from protobuf field <code>uint32 dlphkdbopej = 4;</code>
     */
    protected $dlphkdbopej = 0;
    /**
     * Generated from protobuf field <code>string imlhakodopd = 2;</code>
     */
    protected $imlhakodopd = '';
    /**
     * Generated from protobuf field <code>uint32 hdbkjpaiokk = 8;</code>
     */
    protected $hdbkjpaiokk = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ddckifefchd
     *     @type int $dlphkdbopej
     *     @type string $imlhakodopd
     *     @type int $hdbkjpaiokk
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ddckifefchd = 1;</code>
     * @return string
     */
    public function getDdckifefchd()
    {
        return $this->ddckifefchd;
    }

    /**
     * Generated from protobuf field <code>string ddckifefchd = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDdckifefchd($var)
    {
        GPBUtil::checkString($var, True);
        $this->ddckifefchd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dlphkdbopej = 4;</code>
     * @return int
     */
    public function getDlphkdbopej()
    {
        return $this->dlphkdbopej;
    }

    /**
     * Generated from protobuf field <code>uint32 dlphkdbopej = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDlphkdbopej($var)
    {
        GPBUtil::checkUint32($var);
        $this->dlphkdbopej = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string imlhakodopd = 2;</code>
     * @return string
     */
    public function getImlhakodopd()
    {
        return $this->imlhakodopd;
    }

    /**
     * Generated from protobuf field <code>string imlhakodopd = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setImlhakodopd($var)
    {
        GPBUtil::checkString($var, True);
        $this->imlhakodopd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 hdbkjpaiokk = 8;</code>
     * @return int
     */
    public function getHdbkjpaiokk()
    {
        return $this->hdbkjpaiokk;
    }

    /**
     * Generated from protobuf field <code>uint32 hdbkjpaiokk = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setHdbkjpaiokk($var)
    {
        GPBUtil::checkUint32($var);
        $this->hdbkjpaiokk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}
