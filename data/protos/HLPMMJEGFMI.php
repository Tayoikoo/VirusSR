<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HLPMMJEGFMI</code>
 */
class HLPMMJEGFMI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.OBOGNDGHFGO status = 6;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>uint32 id = 13;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>uint32 FINLPBFNLHP = 5;</code>
     */
    protected $FINLPBFNLHP = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *     @type int $id
     *     @type int $FINLPBFNLHP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.OBOGNDGHFGO status = 6;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.OBOGNDGHFGO status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \OBOGNDGHFGO::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 13;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 13;</code>
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
     * Generated from protobuf field <code>uint32 FINLPBFNLHP = 5;</code>
     * @return int
     */
    public function getFINLPBFNLHP()
    {
        return $this->FINLPBFNLHP;
    }

    /**
     * Generated from protobuf field <code>uint32 FINLPBFNLHP = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setFINLPBFNLHP($var)
    {
        GPBUtil::checkUint32($var);
        $this->FINLPBFNLHP = $var;

        return $this;
    }

}

