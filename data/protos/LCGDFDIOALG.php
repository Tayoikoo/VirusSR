<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LCGDFDIOALG</code>
 */
class LCGDFDIOALG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .MultiPathAvatarType IFJNGOLCGPI = 6;</code>
     */
    private $IFJNGOLCGPI;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $IFJNGOLCGPI
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .MultiPathAvatarType IFJNGOLCGPI = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIFJNGOLCGPI()
    {
        return $this->IFJNGOLCGPI;
    }

    /**
     * Generated from protobuf field <code>repeated .MultiPathAvatarType IFJNGOLCGPI = 6;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIFJNGOLCGPI($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \MultiPathAvatarType::class);
        $this->IFJNGOLCGPI = $arr;

        return $this;
    }

}

