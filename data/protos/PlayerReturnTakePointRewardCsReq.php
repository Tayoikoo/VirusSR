<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DCKNIJCKOLP (4567)
 *
 * Generated from protobuf message <code>PlayerReturnTakePointRewardCsReq</code>
 */
class PlayerReturnTakePointRewardCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 cihifngampc = 5;</code>
     */
    protected $cihifngampc = 0;
    /**
     * Generated from protobuf field <code>uint32 jmkfgfligfa = 14;</code>
     */
    protected $jmkfgfligfa = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $cihifngampc
     *     @type int $jmkfgfligfa
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 cihifngampc = 5;</code>
     * @return int
     */
    public function getCihifngampc()
    {
        return $this->cihifngampc;
    }

    /**
     * Generated from protobuf field <code>uint32 cihifngampc = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCihifngampc($var)
    {
        GPBUtil::checkUint32($var);
        $this->cihifngampc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 jmkfgfligfa = 14;</code>
     * @return int
     */
    public function getJmkfgfligfa()
    {
        return $this->jmkfgfligfa;
    }

    /**
     * Generated from protobuf field <code>uint32 jmkfgfligfa = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setJmkfgfligfa($var)
    {
        GPBUtil::checkUint32($var);
        $this->jmkfgfligfa = $var;

        return $this;
    }

}

