<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PNMKHIIEOBN (1459)
 *
 * Generated from protobuf message <code>SceneEnterStageCsReq</code>
 */
class SceneEnterStageCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool ejgpcipheed = 12;</code>
     */
    protected $ejgpcipheed = false;
    /**
     * Generated from protobuf field <code>.RebattleType rebattle_type = 14;</code>
     */
    protected $rebattle_type = 0;
    /**
     * Generated from protobuf field <code>uint32 event_id = 15;</code>
     */
    protected $event_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $ejgpcipheed
     *     @type int $rebattle_type
     *     @type int $event_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool ejgpcipheed = 12;</code>
     * @return bool
     */
    public function getEjgpcipheed()
    {
        return $this->ejgpcipheed;
    }

    /**
     * Generated from protobuf field <code>bool ejgpcipheed = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setEjgpcipheed($var)
    {
        GPBUtil::checkBool($var);
        $this->ejgpcipheed = $var;

        return $this;
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

    /**
     * Generated from protobuf field <code>uint32 event_id = 15;</code>
     * @return int
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Generated from protobuf field <code>uint32 event_id = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkUint32($var);
        $this->event_id = $var;

        return $this;
    }

}

