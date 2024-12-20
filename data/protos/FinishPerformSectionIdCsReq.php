<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FLPBBLJLBBC (2724)
 *
 * Generated from protobuf message <code>FinishPerformSectionIdCsReq</code>
 */
class FinishPerformSectionIdCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 section_id = 5;</code>
     */
    protected $section_id = 0;
    /**
     * Generated from protobuf field <code>repeated .MessageItem item_list = 4;</code>
     */
    private $item_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $section_id
     *     @type array<\MessageItem>|\Google\Protobuf\Internal\RepeatedField $item_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 section_id = 5;</code>
     * @return int
     */
    public function getSectionId()
    {
        return $this->section_id;
    }

    /**
     * Generated from protobuf field <code>uint32 section_id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSectionId($var)
    {
        GPBUtil::checkUint32($var);
        $this->section_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .MessageItem item_list = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItemList()
    {
        return $this->item_list;
    }

    /**
     * Generated from protobuf field <code>repeated .MessageItem item_list = 4;</code>
     * @param array<\MessageItem>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItemList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \MessageItem::class);
        $this->item_list = $arr;

        return $this;
    }

}

