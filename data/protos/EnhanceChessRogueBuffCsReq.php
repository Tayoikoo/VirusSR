<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NOEBKJPHOLA (5550)
 *
 * Generated from protobuf message <code>EnhanceChessRogueBuffCsReq</code>
 */
class EnhanceChessRogueBuffCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 maze_buff_id = 13;</code>
     */
    protected $maze_buff_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $maze_buff_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 maze_buff_id = 13;</code>
     * @return int
     */
    public function getMazeBuffId()
    {
        return $this->maze_buff_id;
    }

    /**
     * Generated from protobuf field <code>uint32 maze_buff_id = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setMazeBuffId($var)
    {
        GPBUtil::checkUint32($var);
        $this->maze_buff_id = $var;

        return $this;
    }

}

