<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LDCPMBINOEO</code>
 */
class LDCPMBINOEO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 mnjceidpaal = 1;</code>
     */
    protected $mnjceidpaal = 0;
    /**
     * Generated from protobuf field <code>uint32 abphopmgnlh = 2;</code>
     */
    protected $abphopmgnlh = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $mnjceidpaal
     *     @type int $abphopmgnlh
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 mnjceidpaal = 1;</code>
     * @return int
     */
    public function getMnjceidpaal()
    {
        return $this->mnjceidpaal;
    }

    /**
     * Generated from protobuf field <code>uint32 mnjceidpaal = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMnjceidpaal($var)
    {
        GPBUtil::checkUint32($var);
        $this->mnjceidpaal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 abphopmgnlh = 2;</code>
     * @return int
     */
    public function getAbphopmgnlh()
    {
        return $this->abphopmgnlh;
    }

    /**
     * Generated from protobuf field <code>uint32 abphopmgnlh = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAbphopmgnlh($var)
    {
        GPBUtil::checkUint32($var);
        $this->abphopmgnlh = $var;

        return $this;
    }

}
