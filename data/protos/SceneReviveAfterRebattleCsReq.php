<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GNBOIIJIGNL (1478)
 *
 * Generated from protobuf message <code>SceneReviveAfterRebattleCsReq</code>
 */
class SceneReviveAfterRebattleCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.RebattleType rebattle_type = 14;</code>
     */
    protected $rebattle_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $rebattle_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.RebattleType rebattle_type = 14;</code>
     * @return int
     */
    public function getRebattleType()
    {
        return $this->rebattle_type;
    }

    /**
     * Generated from protobuf field <code>.RebattleType rebattle_type = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setRebattleType($var)
    {
        GPBUtil::checkEnum($var, \RebattleType::class);
        $this->rebattle_type = $var;

        return $this;
    }

}
