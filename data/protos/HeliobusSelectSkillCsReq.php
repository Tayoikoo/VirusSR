<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FNLEKANIPFP (5805)
 *
 * Generated from protobuf message <code>HeliobusSelectSkillCsReq</code>
 */
class HeliobusSelectSkillCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 skill_id = 14;</code>
     */
    protected $skill_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $skill_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 skill_id = 14;</code>
     * @return int
     */
    public function getSkillId()
    {
        return $this->skill_id;
    }

    /**
     * Generated from protobuf field <code>uint32 skill_id = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setSkillId($var)
    {
        GPBUtil::checkUint32($var);
        $this->skill_id = $var;

        return $this;
    }

}

