<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OEFMFCFBFJO (5627)
 *
 * Generated from protobuf message <code>GetRogueShopMiracleInfoCsReq</code>
 */
class GetRogueShopMiracleInfoCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool elnccecchmg = 7;</code>
     */
    protected $elnccecchmg = false;
    /**
     * Generated from protobuf field <code>uint32 interacted_prop_entity_id = 4;</code>
     */
    protected $interacted_prop_entity_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $elnccecchmg
     *     @type int $interacted_prop_entity_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool elnccecchmg = 7;</code>
     * @return bool
     */
    public function getElnccecchmg()
    {
        return $this->elnccecchmg;
    }

    /**
     * Generated from protobuf field <code>bool elnccecchmg = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setElnccecchmg($var)
    {
        GPBUtil::checkBool($var);
        $this->elnccecchmg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 interacted_prop_entity_id = 4;</code>
     * @return int
     */
    public function getInteractedPropEntityId()
    {
        return $this->interacted_prop_entity_id;
    }

    /**
     * Generated from protobuf field <code>uint32 interacted_prop_entity_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setInteractedPropEntityId($var)
    {
        GPBUtil::checkUint32($var);
        $this->interacted_prop_entity_id = $var;

        return $this;
    }

}

