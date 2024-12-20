<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Tutorial</code>
 */
class Tutorial extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 Id = 6;</code>
     */
    protected $Id = 0;
    /**
     * Generated from protobuf field <code>.TutorialStatus Status = 7;</code>
     */
    protected $Status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Id
     *     @type int $Status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 Id = 6;</code>
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Generated from protobuf field <code>uint32 Id = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->Id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TutorialStatus Status = 7;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Generated from protobuf field <code>.TutorialStatus Status = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \TutorialStatus::class);
        $this->Status = $var;

        return $this;
    }

}

