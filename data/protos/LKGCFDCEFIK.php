<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LKGCFDCEFIK</code>
 */
class LKGCFDCEFIK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool is_win = 7;</code>
     */
    protected $is_win = false;
    /**
     * Generated from protobuf field <code>uint32 daelnjignjc = 15;</code>
     */
    protected $daelnjignjc = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_win
     *     @type int $daelnjignjc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool is_win = 7;</code>
     * @return bool
     */
    public function getIsWin()
    {
        return $this->is_win;
    }

    /**
     * Generated from protobuf field <code>bool is_win = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsWin($var)
    {
        GPBUtil::checkBool($var);
        $this->is_win = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 daelnjignjc = 15;</code>
     * @return int
     */
    public function getDaelnjignjc()
    {
        return $this->daelnjignjc;
    }

    /**
     * Generated from protobuf field <code>uint32 daelnjignjc = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setDaelnjignjc($var)
    {
        GPBUtil::checkUint32($var);
        $this->daelnjignjc = $var;

        return $this;
    }

}

