<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ILJAPCDBHLG (7111)
 *
 * Generated from protobuf message <code>EvolveBuildShopAbilityDownScRsp</code>
 */
class EvolveBuildShopAbilityDownScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 10;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>uint32 dhdkhmfcjma = 11;</code>
     */
    protected $dhdkhmfcjma = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $level
     *     @type int $dhdkhmfcjma
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
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

    /**
     * Generated from protobuf field <code>uint32 dhdkhmfcjma = 11;</code>
     * @return int
     */
    public function getDhdkhmfcjma()
    {
        return $this->dhdkhmfcjma;
    }

    /**
     * Generated from protobuf field <code>uint32 dhdkhmfcjma = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setDhdkhmfcjma($var)
    {
        GPBUtil::checkUint32($var);
        $this->dhdkhmfcjma = $var;

        return $this;
    }

}
