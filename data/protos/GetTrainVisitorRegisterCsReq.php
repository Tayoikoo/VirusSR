<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OBICLPABBAD (3752)
 *
 * Generated from protobuf message <code>GetTrainVisitorRegisterCsReq</code>
 */
class GetTrainVisitorRegisterCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.IPAGOPIEEJP type = 2;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.IPAGOPIEEJP type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.IPAGOPIEEJP type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \IPAGOPIEEJP::class);
        $this->type = $var;

        return $this;
    }

}

