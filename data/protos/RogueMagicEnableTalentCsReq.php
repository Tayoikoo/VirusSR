<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EOLOHIPEMPF (7717)
 *
 * Generated from protobuf message <code>RogueMagicEnableTalentCsReq</code>
 */
class RogueMagicEnableTalentCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 talent_id = 7;</code>
     */
    protected $talent_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $talent_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 talent_id = 7;</code>
     * @return int
     */
    public function getTalentId()
    {
        return $this->talent_id;
    }

    /**
     * Generated from protobuf field <code>uint32 talent_id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setTalentId($var)
    {
        GPBUtil::checkUint32($var);
        $this->talent_id = $var;

        return $this;
    }

}

