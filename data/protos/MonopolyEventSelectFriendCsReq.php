<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IJKIGHKCJCL (7040)
 *
 * Generated from protobuf message <code>MonopolyEventSelectFriendCsReq</code>
 */
class MonopolyEventSelectFriendCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 bdndenhpded = 8;</code>
     */
    protected $bdndenhpded = 0;
    /**
     * Generated from protobuf field <code>bool jiegfhbbkif = 5;</code>
     */
    protected $jiegfhbbkif = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $bdndenhpded
     *     @type bool $jiegfhbbkif
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 bdndenhpded = 8;</code>
     * @return int
     */
    public function getBdndenhpded()
    {
        return $this->bdndenhpded;
    }

    /**
     * Generated from protobuf field <code>uint32 bdndenhpded = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setBdndenhpded($var)
    {
        GPBUtil::checkUint32($var);
        $this->bdndenhpded = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool jiegfhbbkif = 5;</code>
     * @return bool
     */
    public function getJiegfhbbkif()
    {
        return $this->jiegfhbbkif;
    }

    /**
     * Generated from protobuf field <code>bool jiegfhbbkif = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setJiegfhbbkif($var)
    {
        GPBUtil::checkBool($var);
        $this->jiegfhbbkif = $var;

        return $this;
    }

}

