<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KPIDLHPAABA</code>
 */
class KPIDLHPAABA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .KFLMNJFICNK buff_list = 1;</code>
     */
    private $buff_list;
    /**
     * Generated from protobuf field <code>repeated .FLBAHDBFFPM avatar_list = 2;</code>
     */
    private $avatar_list;
    /**
     * Generated from protobuf field <code>repeated uint32 LDLKIHGICIJ = 7;</code>
     */
    private $LDLKIHGICIJ;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\KFLMNJFICNK>|\Google\Protobuf\Internal\RepeatedField $buff_list
     *     @type array<\FLBAHDBFFPM>|\Google\Protobuf\Internal\RepeatedField $avatar_list
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $LDLKIHGICIJ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .KFLMNJFICNK buff_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuffList()
    {
        return $this->buff_list;
    }

    /**
     * Generated from protobuf field <code>repeated .KFLMNJFICNK buff_list = 1;</code>
     * @param array<\KFLMNJFICNK>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuffList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \KFLMNJFICNK::class);
        $this->buff_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .FLBAHDBFFPM avatar_list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarList()
    {
        return $this->avatar_list;
    }

    /**
     * Generated from protobuf field <code>repeated .FLBAHDBFFPM avatar_list = 2;</code>
     * @param array<\FLBAHDBFFPM>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \FLBAHDBFFPM::class);
        $this->avatar_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 LDLKIHGICIJ = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLDLKIHGICIJ()
    {
        return $this->LDLKIHGICIJ;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 LDLKIHGICIJ = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLDLKIHGICIJ($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->LDLKIHGICIJ = $arr;

        return $this;
    }

}
