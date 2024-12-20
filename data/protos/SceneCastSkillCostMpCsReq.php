<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CNMDEGBEPNA (1425)
 *
 * Generated from protobuf message <code>SceneCastSkillCostMpCsReq</code>
 */
class SceneCastSkillCostMpCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 skill_index = 14;</code>
     */
    protected $skill_index = 0;
    /**
     * Generated from protobuf field <code>uint32 attacked_group_id = 1;</code>
     */
    protected $attacked_group_id = 0;
    /**
     * Generated from protobuf field <code>uint32 caster_id = 2;</code>
     */
    protected $caster_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $skill_index
     *     @type int $attacked_group_id
     *     @type int $caster_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 skill_index = 14;</code>
     * @return int
     */
    public function getSkillIndex()
    {
        return $this->skill_index;
    }

    /**
     * Generated from protobuf field <code>uint32 skill_index = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setSkillIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->skill_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 attacked_group_id = 1;</code>
     * @return int
     */
    public function getAttackedGroupId()
    {
        return $this->attacked_group_id;
    }

    /**
     * Generated from protobuf field <code>uint32 attacked_group_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAttackedGroupId($var)
    {
        GPBUtil::checkUint32($var);
        $this->attacked_group_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 caster_id = 2;</code>
     * @return int
     */
    public function getCasterId()
    {
        return $this->caster_id;
    }

    /**
     * Generated from protobuf field <code>uint32 caster_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCasterId($var)
    {
        GPBUtil::checkUint32($var);
        $this->caster_id = $var;

        return $this;
    }

}

