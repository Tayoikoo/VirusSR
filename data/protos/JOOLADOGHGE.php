<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JOOLADOGHGE</code>
 */
class JOOLADOGHGE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 pomeofhemgh = 1;</code>
     */
    protected $pomeofhemgh = 0;
    /**
     * Generated from protobuf field <code>uint32 apbjmeocbfa = 11;</code>
     */
    protected $apbjmeocbfa = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $pomeofhemgh
     *     @type int $apbjmeocbfa
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 pomeofhemgh = 1;</code>
     * @return int
     */
    public function getPomeofhemgh()
    {
        return $this->pomeofhemgh;
    }

    /**
     * Generated from protobuf field <code>uint32 pomeofhemgh = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPomeofhemgh($var)
    {
        GPBUtil::checkUint32($var);
        $this->pomeofhemgh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 apbjmeocbfa = 11;</code>
     * @return int
     */
    public function getApbjmeocbfa()
    {
        return $this->apbjmeocbfa;
    }

    /**
     * Generated from protobuf field <code>uint32 apbjmeocbfa = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setApbjmeocbfa($var)
    {
        GPBUtil::checkUint32($var);
        $this->apbjmeocbfa = $var;

        return $this;
    }

}

