<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GEANJPFCADJ</code>
 */
class GEANJPFCADJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ejledajjddh = 10;</code>
     */
    protected $ejledajjddh = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>uint32 mijgknpmidl = 12;</code>
     */
    protected $mijgknpmidl = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ejledajjddh
     *     @type int $level
     *     @type int $mijgknpmidl
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ejledajjddh = 10;</code>
     * @return int
     */
    public function getEjledajjddh()
    {
        return $this->ejledajjddh;
    }

    /**
     * Generated from protobuf field <code>uint32 ejledajjddh = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setEjledajjddh($var)
    {
        GPBUtil::checkUint32($var);
        $this->ejledajjddh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 mijgknpmidl = 12;</code>
     * @return int
     */
    public function getMijgknpmidl()
    {
        return $this->mijgknpmidl;
    }

    /**
     * Generated from protobuf field <code>uint32 mijgknpmidl = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setMijgknpmidl($var)
    {
        GPBUtil::checkUint32($var);
        $this->mijgknpmidl = $var;

        return $this;
    }

}

