<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GOOABBBFKPD (1864)
 *
 * Generated from protobuf message <code>OpenRogueChestCsReq</code>
 */
class OpenRogueChestCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 interacted_prop_entity_id = 1;</code>
     */
    protected $interacted_prop_entity_id = 0;
    /**
     * Generated from protobuf field <code>bool onhhplekhki = 11;</code>
     */
    protected $onhhplekhki = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $interacted_prop_entity_id
     *     @type bool $onhhplekhki
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 interacted_prop_entity_id = 1;</code>
     * @return int
     */
    public function getInteractedPropEntityId()
    {
        return $this->interacted_prop_entity_id;
    }

    /**
     * Generated from protobuf field <code>uint32 interacted_prop_entity_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setInteractedPropEntityId($var)
    {
        GPBUtil::checkUint32($var);
        $this->interacted_prop_entity_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool onhhplekhki = 11;</code>
     * @return bool
     */
    public function getOnhhplekhki()
    {
        return $this->onhhplekhki;
    }

    /**
     * Generated from protobuf field <code>bool onhhplekhki = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setOnhhplekhki($var)
    {
        GPBUtil::checkBool($var);
        $this->onhhplekhki = $var;

        return $this;
    }

}

