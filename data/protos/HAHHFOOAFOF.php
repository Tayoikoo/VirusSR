<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HAHHFOOAFOF</code>
 */
class HAHHFOOAFOF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 id = 2;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>uint32 NKLCEJLJDED = 5;</code>
     */
    protected $NKLCEJLJDED = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type int $NKLCEJLJDED
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 id = 2;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NKLCEJLJDED = 5;</code>
     * @return int
     */
    public function getNKLCEJLJDED()
    {
        return $this->NKLCEJLJDED;
    }

    /**
     * Generated from protobuf field <code>uint32 NKLCEJLJDED = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setNKLCEJLJDED($var)
    {
        GPBUtil::checkUint32($var);
        $this->NKLCEJLJDED = $var;

        return $this;
    }

}
