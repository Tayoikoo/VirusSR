<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MakeDrinkScRsp (6983)
 *
 * Generated from protobuf message <code>MakeDrinkScRsp</code>
 */
class MakeDrinkScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool IsSucc = 13;</code>
     */
    protected $IsSucc = false;
    /**
     * Generated from protobuf field <code>uint32 NextChatId = 4;</code>
     */
    protected $NextChatId = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $IsSucc
     *     @type int $NextChatId
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool IsSucc = 13;</code>
     * @return bool
     */
    public function getIsSucc()
    {
        return $this->IsSucc;
    }

    /**
     * Generated from protobuf field <code>bool IsSucc = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsSucc($var)
    {
        GPBUtil::checkBool($var);
        $this->IsSucc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NextChatId = 4;</code>
     * @return int
     */
    public function getNextChatId()
    {
        return $this->NextChatId;
    }

    /**
     * Generated from protobuf field <code>uint32 NextChatId = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNextChatId($var)
    {
        GPBUtil::checkUint32($var);
        $this->NextChatId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
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
