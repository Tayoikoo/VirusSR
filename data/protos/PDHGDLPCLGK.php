<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PDHGDLPCLGK</code>
 */
class PDHGDLPCLGK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 glljjmlepgh = 11;</code>
     */
    protected $glljjmlepgh = 0;
    /**
     * Generated from protobuf field <code>uint32 bkapfkdkcec = 14;</code>
     */
    protected $bkapfkdkcec = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $glljjmlepgh
     *     @type int $bkapfkdkcec
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 glljjmlepgh = 11;</code>
     * @return int
     */
    public function getGlljjmlepgh()
    {
        return $this->glljjmlepgh;
    }

    /**
     * Generated from protobuf field <code>uint32 glljjmlepgh = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setGlljjmlepgh($var)
    {
        GPBUtil::checkUint32($var);
        $this->glljjmlepgh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 bkapfkdkcec = 14;</code>
     * @return int
     */
    public function getBkapfkdkcec()
    {
        return $this->bkapfkdkcec;
    }

    /**
     * Generated from protobuf field <code>uint32 bkapfkdkcec = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setBkapfkdkcec($var)
    {
        GPBUtil::checkUint32($var);
        $this->bkapfkdkcec = $var;

        return $this;
    }

}

