<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KKDJHKFFJKE (7395)
 *
 * Generated from protobuf message <code>LobbySyncInfoScNotify</code>
 */
class LobbySyncInfoScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 uid = 3;</code>
     */
    protected $uid = 0;
    /**
     * Generated from protobuf field <code>.LobbyModifyType type = 2;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>repeated .GDOHNMGABGE lhifalkbalm = 4;</code>
     */
    private $lhifalkbalm;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $uid
     *     @type int $type
     *     @type array<\GDOHNMGABGE>|\Google\Protobuf\Internal\RepeatedField $lhifalkbalm
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 3;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.LobbyModifyType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.LobbyModifyType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \LobbyModifyType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .GDOHNMGABGE lhifalkbalm = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLhifalkbalm()
    {
        return $this->lhifalkbalm;
    }

    /**
     * Generated from protobuf field <code>repeated .GDOHNMGABGE lhifalkbalm = 4;</code>
     * @param array<\GDOHNMGABGE>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLhifalkbalm($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \GDOHNMGABGE::class);
        $this->lhifalkbalm = $arr;

        return $this;
    }

}

