<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OMCBPJFAIEE (2584)
 *
 * Generated from protobuf message <code>AcceptExpeditionCsReq</code>
 */
class AcceptExpeditionCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ExpeditionInfo accept_expedition = 12;</code>
     */
    protected $accept_expedition = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ExpeditionInfo $accept_expedition
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ExpeditionInfo accept_expedition = 12;</code>
     * @return \ExpeditionInfo|null
     */
    public function getAcceptExpedition()
    {
        return $this->accept_expedition;
    }

    public function hasAcceptExpedition()
    {
        return isset($this->accept_expedition);
    }

    public function clearAcceptExpedition()
    {
        unset($this->accept_expedition);
    }

    /**
     * Generated from protobuf field <code>.ExpeditionInfo accept_expedition = 12;</code>
     * @param \ExpeditionInfo $var
     * @return $this
     */
    public function setAcceptExpedition($var)
    {
        GPBUtil::checkMessage($var, \ExpeditionInfo::class);
        $this->accept_expedition = $var;

        return $this;
    }

}

