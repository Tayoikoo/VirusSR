<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FAMDDGEBEIB</code>
 */
class FAMDDGEBEIB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 npgnekmcnmn = 11;</code>
     */
    protected $npgnekmcnmn = 0;
    /**
     * Generated from protobuf field <code>bool ojmpbbggefj = 15;</code>
     */
    protected $ojmpbbggefj = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $npgnekmcnmn
     *     @type bool $ojmpbbggefj
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 npgnekmcnmn = 11;</code>
     * @return int
     */
    public function getNpgnekmcnmn()
    {
        return $this->npgnekmcnmn;
    }

    /**
     * Generated from protobuf field <code>uint32 npgnekmcnmn = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setNpgnekmcnmn($var)
    {
        GPBUtil::checkUint32($var);
        $this->npgnekmcnmn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ojmpbbggefj = 15;</code>
     * @return bool
     */
    public function getOjmpbbggefj()
    {
        return $this->ojmpbbggefj;
    }

    /**
     * Generated from protobuf field <code>bool ojmpbbggefj = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setOjmpbbggefj($var)
    {
        GPBUtil::checkBool($var);
        $this->ojmpbbggefj = $var;

        return $this;
    }

}
