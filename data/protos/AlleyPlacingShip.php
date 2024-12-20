<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AlleyPlacingShip</code>
 */
class AlleyPlacingShip extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .NGFBPKJEGPF GoodsList = 13;</code>
     */
    private $GoodsList;
    /**
     * Generated from protobuf field <code>uint32 ShipId = 4;</code>
     */
    protected $ShipId = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\NGFBPKJEGPF>|\Google\Protobuf\Internal\RepeatedField $GoodsList
     *     @type int $ShipId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .NGFBPKJEGPF GoodsList = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGoodsList()
    {
        return $this->GoodsList;
    }

    /**
     * Generated from protobuf field <code>repeated .NGFBPKJEGPF GoodsList = 13;</code>
     * @param array<\NGFBPKJEGPF>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGoodsList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \NGFBPKJEGPF::class);
        $this->GoodsList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ShipId = 4;</code>
     * @return int
     */
    public function getShipId()
    {
        return $this->ShipId;
    }

    /**
     * Generated from protobuf field <code>uint32 ShipId = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setShipId($var)
    {
        GPBUtil::checkUint32($var);
        $this->ShipId = $var;

        return $this;
    }

}
