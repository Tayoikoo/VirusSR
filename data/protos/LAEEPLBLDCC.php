<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LAEEPLBLDCC</code>
 */
class LAEEPLBLDCC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool ldnbeppjjkn = 11;</code>
     */
    protected $ldnbeppjjkn = false;
    /**
     * Generated from protobuf field <code>uint32 gpafpkbggcp = 15;</code>
     */
    protected $gpafpkbggcp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $ldnbeppjjkn
     *     @type int $gpafpkbggcp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool ldnbeppjjkn = 11;</code>
     * @return bool
     */
    public function getLdnbeppjjkn()
    {
        return $this->ldnbeppjjkn;
    }

    /**
     * Generated from protobuf field <code>bool ldnbeppjjkn = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setLdnbeppjjkn($var)
    {
        GPBUtil::checkBool($var);
        $this->ldnbeppjjkn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gpafpkbggcp = 15;</code>
     * @return int
     */
    public function getGpafpkbggcp()
    {
        return $this->gpafpkbggcp;
    }

    /**
     * Generated from protobuf field <code>uint32 gpafpkbggcp = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setGpafpkbggcp($var)
    {
        GPBUtil::checkUint32($var);
        $this->gpafpkbggcp = $var;

        return $this;
    }

}

