<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HABENCNJFDP (7072)
 *
 * Generated from protobuf message <code>MonopolyLikeScNotify</code>
 */
class MonopolyLikeScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 gdjbmilobaa = 3;</code>
     */
    private $gdjbmilobaa;
    /**
     * Generated from protobuf field <code>uint32 bamfgmlflhe = 8;</code>
     */
    protected $bamfgmlflhe = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $gdjbmilobaa
     *     @type int $bamfgmlflhe
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 gdjbmilobaa = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGdjbmilobaa()
    {
        return $this->gdjbmilobaa;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 gdjbmilobaa = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGdjbmilobaa($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->gdjbmilobaa = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 bamfgmlflhe = 8;</code>
     * @return int
     */
    public function getBamfgmlflhe()
    {
        return $this->bamfgmlflhe;
    }

    /**
     * Generated from protobuf field <code>uint32 bamfgmlflhe = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setBamfgmlflhe($var)
    {
        GPBUtil::checkUint32($var);
        $this->bamfgmlflhe = $var;

        return $this;
    }

}
