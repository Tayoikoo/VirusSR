<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JPOGMNIIHIF (4453)
 *
 * Generated from protobuf message <code>UseTreasureDungeonItemCsReq</code>
 */
class UseTreasureDungeonItemCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ilofimodien = 9;</code>
     */
    protected $ilofimodien = 0;
    /**
     * Generated from protobuf field <code>uint32 item_id = 6;</code>
     */
    protected $item_id = 0;
    /**
     * Generated from protobuf field <code>uint32 dleejgfablc = 4;</code>
     */
    protected $dleejgfablc = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ilofimodien
     *     @type int $item_id
     *     @type int $dleejgfablc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ilofimodien = 9;</code>
     * @return int
     */
    public function getIlofimodien()
    {
        return $this->ilofimodien;
    }

    /**
     * Generated from protobuf field <code>uint32 ilofimodien = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setIlofimodien($var)
    {
        GPBUtil::checkUint32($var);
        $this->ilofimodien = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 item_id = 6;</code>
     * @return int
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * Generated from protobuf field <code>uint32 item_id = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setItemId($var)
    {
        GPBUtil::checkUint32($var);
        $this->item_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dleejgfablc = 4;</code>
     * @return int
     */
    public function getDleejgfablc()
    {
        return $this->dleejgfablc;
    }

    /**
     * Generated from protobuf field <code>uint32 dleejgfablc = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDleejgfablc($var)
    {
        GPBUtil::checkUint32($var);
        $this->dleejgfablc = $var;

        return $this;
    }

}
