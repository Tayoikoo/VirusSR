<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IGPBCLHEMNL</code>
 */
class IGPBCLHEMNL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 GJGFOMCBMDO = 15;</code>
     */
    protected $GJGFOMCBMDO = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 1;</code>
     */
    protected $level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $GJGFOMCBMDO
     *     @type int $level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
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
     * Generated from protobuf field <code>uint32 GJGFOMCBMDO = 15;</code>
     * @return int
     */
    public function getGJGFOMCBMDO()
    {
        return $this->GJGFOMCBMDO;
    }

    /**
     * Generated from protobuf field <code>uint32 GJGFOMCBMDO = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setGJGFOMCBMDO($var)
    {
        GPBUtil::checkUint32($var);
        $this->GJGFOMCBMDO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 1;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 1;</code>
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

