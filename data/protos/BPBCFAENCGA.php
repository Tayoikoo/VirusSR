<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BPBCFAENCGA</code>
 */
class BPBCFAENCGA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>uint32 bmjckoiomgp = 2;</code>
     */
    protected $bmjckoiomgp = 0;
    /**
     * Generated from protobuf field <code>uint32 ljmgfglaiji = 3;</code>
     */
    protected $ljmgfglaiji = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type int $bmjckoiomgp
     *     @type int $ljmgfglaiji
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
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
     * Generated from protobuf field <code>uint32 bmjckoiomgp = 2;</code>
     * @return int
     */
    public function getBmjckoiomgp()
    {
        return $this->bmjckoiomgp;
    }

    /**
     * Generated from protobuf field <code>uint32 bmjckoiomgp = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBmjckoiomgp($var)
    {
        GPBUtil::checkUint32($var);
        $this->bmjckoiomgp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ljmgfglaiji = 3;</code>
     * @return int
     */
    public function getLjmgfglaiji()
    {
        return $this->ljmgfglaiji;
    }

    /**
     * Generated from protobuf field <code>uint32 ljmgfglaiji = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLjmgfglaiji($var)
    {
        GPBUtil::checkUint32($var);
        $this->ljmgfglaiji = $var;

        return $this;
    }

}
