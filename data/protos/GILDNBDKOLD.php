<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GILDNBDKOLD</code>
 */
class GILDNBDKOLD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 hfcmkooojai = 11;</code>
     */
    protected $hfcmkooojai = 0;
    /**
     * Generated from protobuf field <code>bool ldnbeppjjkn = 5;</code>
     */
    protected $ldnbeppjjkn = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $hfcmkooojai
     *     @type bool $ldnbeppjjkn
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 hfcmkooojai = 11;</code>
     * @return int
     */
    public function getHfcmkooojai()
    {
        return $this->hfcmkooojai;
    }

    /**
     * Generated from protobuf field <code>uint32 hfcmkooojai = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setHfcmkooojai($var)
    {
        GPBUtil::checkUint32($var);
        $this->hfcmkooojai = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ldnbeppjjkn = 5;</code>
     * @return bool
     */
    public function getLdnbeppjjkn()
    {
        return $this->ldnbeppjjkn;
    }

    /**
     * Generated from protobuf field <code>bool ldnbeppjjkn = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setLdnbeppjjkn($var)
    {
        GPBUtil::checkBool($var);
        $this->ldnbeppjjkn = $var;

        return $this;
    }

}

