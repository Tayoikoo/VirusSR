<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DECPLLJKFGO (352)
 *
 * Generated from protobuf message <code>PromoteAvatarCsReq</code>
 */
class PromoteAvatarCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 2;</code>
     */
    protected $base_avatar_id = 0;
    /**
     * Generated from protobuf field <code>repeated .ItemCost item_list = 10;</code>
     */
    private $item_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $base_avatar_id
     *     @type array<\ItemCost>|\Google\Protobuf\Internal\RepeatedField $item_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 2;</code>
     * @return int
     */
    public function getBaseAvatarId()
    {
        return $this->base_avatar_id;
    }

    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBaseAvatarId($var)
    {
        GPBUtil::checkUint32($var);
        $this->base_avatar_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .ItemCost item_list = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItemList()
    {
        return $this->item_list;
    }

    /**
     * Generated from protobuf field <code>repeated .ItemCost item_list = 10;</code>
     * @param array<\ItemCost>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItemList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ItemCost::class);
        $this->item_list = $arr;

        return $this;
    }

}

