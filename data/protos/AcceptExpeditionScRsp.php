<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IFJBKOMEKIK (2527)
 *
 * Generated from protobuf message <code>AcceptExpeditionScRsp</code>
 */
class AcceptExpeditionScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ExpeditionInfo accept_expedition = 3;</code>
     */
    protected $accept_expedition = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ExpeditionInfo $accept_expedition
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ExpeditionInfo accept_expedition = 3;</code>
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
     * Generated from protobuf field <code>.ExpeditionInfo accept_expedition = 3;</code>
     * @param \ExpeditionInfo $var
     * @return $this
     */
    public function setAcceptExpedition($var)
    {
        GPBUtil::checkMessage($var, \ExpeditionInfo::class);
        $this->accept_expedition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}
