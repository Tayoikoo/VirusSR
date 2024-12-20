<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>APGOFAIDAEG</code>
 */
class APGOFAIDAEG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.SecretKeyType relic_unique_id = 7;</code>
     */
    protected $relic_unique_id = 0;
    /**
     * Generated from protobuf field <code>string EIPMICCMJLN = 15;</code>
     */
    protected $EIPMICCMJLN = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $relic_unique_id
     *     @type string $EIPMICCMJLN
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.SecretKeyType relic_unique_id = 7;</code>
     * @return int
     */
    public function getRelicUniqueId()
    {
        return $this->relic_unique_id;
    }

    /**
     * Generated from protobuf field <code>.SecretKeyType relic_unique_id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setRelicUniqueId($var)
    {
        GPBUtil::checkEnum($var, \SecretKeyType::class);
        $this->relic_unique_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string EIPMICCMJLN = 15;</code>
     * @return string
     */
    public function getEIPMICCMJLN()
    {
        return $this->EIPMICCMJLN;
    }

    /**
     * Generated from protobuf field <code>string EIPMICCMJLN = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setEIPMICCMJLN($var)
    {
        GPBUtil::checkString($var, True);
        $this->EIPMICCMJLN = $var;

        return $this;
    }

}
