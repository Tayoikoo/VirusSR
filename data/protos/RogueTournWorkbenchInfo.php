<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RogueTournWorkbenchInfo</code>
 */
class RogueTournWorkbenchInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .WorkbenchFuncIdInfo kjipfmbkejl = 1;</code>
     */
    private $kjipfmbkejl;
    /**
     * Generated from protobuf field <code>uint32 lplhljipmhc = 3;</code>
     */
    protected $lplhljipmhc = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\WorkbenchFuncIdInfo>|\Google\Protobuf\Internal\RepeatedField $kjipfmbkejl
     *     @type int $lplhljipmhc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .WorkbenchFuncIdInfo kjipfmbkejl = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKjipfmbkejl()
    {
        return $this->kjipfmbkejl;
    }

    /**
     * Generated from protobuf field <code>repeated .WorkbenchFuncIdInfo kjipfmbkejl = 1;</code>
     * @param array<\WorkbenchFuncIdInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKjipfmbkejl($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \WorkbenchFuncIdInfo::class);
        $this->kjipfmbkejl = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lplhljipmhc = 3;</code>
     * @return int
     */
    public function getLplhljipmhc()
    {
        return $this->lplhljipmhc;
    }

    /**
     * Generated from protobuf field <code>uint32 lplhljipmhc = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLplhljipmhc($var)
    {
        GPBUtil::checkUint32($var);
        $this->lplhljipmhc = $var;

        return $this;
    }

}
