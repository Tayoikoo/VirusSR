<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LMDEKCEFMJC</code>
 */
class LMDEKCEFMJC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 max_score = 2;</code>
     */
    protected $max_score = 0;
    /**
     * Generated from protobuf field <code>uint32 level_id = 3;</code>
     */
    protected $level_id = 0;
    /**
     * Generated from protobuf field <code>uint32 daofmfkknba = 10;</code>
     */
    protected $daofmfkknba = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $max_score
     *     @type int $level_id
     *     @type int $daofmfkknba
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 max_score = 2;</code>
     * @return int
     */
    public function getMaxScore()
    {
        return $this->max_score;
    }

    /**
     * Generated from protobuf field <code>uint32 max_score = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxScore($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level_id = 3;</code>
     * @return int
     */
    public function getLevelId()
    {
        return $this->level_id;
    }

    /**
     * Generated from protobuf field <code>uint32 level_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLevelId($var)
    {
        GPBUtil::checkUint32($var);
        $this->level_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 daofmfkknba = 10;</code>
     * @return int
     */
    public function getDaofmfkknba()
    {
        return $this->daofmfkknba;
    }

    /**
     * Generated from protobuf field <code>uint32 daofmfkknba = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setDaofmfkknba($var)
    {
        GPBUtil::checkUint32($var);
        $this->daofmfkknba = $var;

        return $this;
    }

}

