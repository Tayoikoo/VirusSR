<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KMHGELFOMHI</code>
 */
class KMHGELFOMHI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 buff_id = 3;</code>
     */
    protected $buff_id = 0;
    /**
     * Generated from protobuf field <code>uint64 unique_id = 6;</code>
     */
    protected $unique_id = 0;
    /**
     * Generated from protobuf field <code>uint32 ngmdcnkoeek = 4;</code>
     */
    protected $ngmdcnkoeek = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $buff_id
     *     @type int|string $unique_id
     *     @type int $ngmdcnkoeek
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 buff_id = 3;</code>
     * @return int
     */
    public function getBuffId()
    {
        return $this->buff_id;
    }

    /**
     * Generated from protobuf field <code>uint32 buff_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setBuffId($var)
    {
        GPBUtil::checkUint32($var);
        $this->buff_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 unique_id = 6;</code>
     * @return int|string
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * Generated from protobuf field <code>uint64 unique_id = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUniqueId($var)
    {
        GPBUtil::checkUint64($var);
        $this->unique_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ngmdcnkoeek = 4;</code>
     * @return int
     */
    public function getNgmdcnkoeek()
    {
        return $this->ngmdcnkoeek;
    }

    /**
     * Generated from protobuf field <code>uint32 ngmdcnkoeek = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNgmdcnkoeek($var)
    {
        GPBUtil::checkUint32($var);
        $this->ngmdcnkoeek = $var;

        return $this;
    }

}

