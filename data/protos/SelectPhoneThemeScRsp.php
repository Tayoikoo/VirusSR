<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PLMGBFCMBJD (5152)
 *
 * Generated from protobuf message <code>SelectPhoneThemeScRsp</code>
 */
class SelectPhoneThemeScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ihamliiecmi = 10;</code>
     */
    protected $ihamliiecmi = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 cur_phone_theme = 5;</code>
     */
    protected $cur_phone_theme = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ihamliiecmi
     *     @type int $retcode
     *     @type int $cur_phone_theme
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ihamliiecmi = 10;</code>
     * @return int
     */
    public function getIhamliiecmi()
    {
        return $this->ihamliiecmi;
    }

    /**
     * Generated from protobuf field <code>uint32 ihamliiecmi = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setIhamliiecmi($var)
    {
        GPBUtil::checkUint32($var);
        $this->ihamliiecmi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cur_phone_theme = 5;</code>
     * @return int
     */
    public function getCurPhoneTheme()
    {
        return $this->cur_phone_theme;
    }

    /**
     * Generated from protobuf field <code>uint32 cur_phone_theme = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCurPhoneTheme($var)
    {
        GPBUtil::checkUint32($var);
        $this->cur_phone_theme = $var;

        return $this;
    }

}

