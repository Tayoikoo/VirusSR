<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KJIBPEBFOMO (327)
 *
 * Generated from protobuf message <code>AvatarExpUpScRsp</code>
 */
class AvatarExpUpScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .PileItem return_item_list = 2;</code>
     */
    private $return_item_list;
    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\PileItem>|\Google\Protobuf\Internal\RepeatedField $return_item_list
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .PileItem return_item_list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReturnItemList()
    {
        return $this->return_item_list;
    }

    /**
     * Generated from protobuf field <code>repeated .PileItem return_item_list = 2;</code>
     * @param array<\PileItem>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReturnItemList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \PileItem::class);
        $this->return_item_list = $arr;

        return $this;
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

}

