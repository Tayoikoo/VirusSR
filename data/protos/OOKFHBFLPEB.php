<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OOKFHBFLPEB</code>
 */
class OOKFHBFLPEB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.AAKGCJPOJDF cfjmobmclbi = 4;</code>
     */
    protected $cfjmobmclbi = null;
    /**
     * Generated from protobuf field <code>uint32 unique_id = 14;</code>
     */
    protected $unique_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \AAKGCJPOJDF $cfjmobmclbi
     *     @type int $unique_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.AAKGCJPOJDF cfjmobmclbi = 4;</code>
     * @return \AAKGCJPOJDF|null
     */
    public function getCfjmobmclbi()
    {
        return $this->cfjmobmclbi;
    }

    public function hasCfjmobmclbi()
    {
        return isset($this->cfjmobmclbi);
    }

    public function clearCfjmobmclbi()
    {
        unset($this->cfjmobmclbi);
    }

    /**
     * Generated from protobuf field <code>.AAKGCJPOJDF cfjmobmclbi = 4;</code>
     * @param \AAKGCJPOJDF $var
     * @return $this
     */
    public function setCfjmobmclbi($var)
    {
        GPBUtil::checkMessage($var, \AAKGCJPOJDF::class);
        $this->cfjmobmclbi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 unique_id = 14;</code>
     * @return int
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * Generated from protobuf field <code>uint32 unique_id = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setUniqueId($var)
    {
        GPBUtil::checkUint32($var);
        $this->unique_id = $var;

        return $this;
    }

}

