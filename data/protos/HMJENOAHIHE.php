<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HMJENOAHIHE</code>
 */
class HMJENOAHIHE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 6;</code>
     */
    protected $nbljpgfhdfi = 0;
    /**
     * Generated from protobuf field <code>uint32 max_score = 15;</code>
     */
    protected $max_score = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $nbljpgfhdfi
     *     @type int $max_score
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 6;</code>
     * @return int
     */
    public function getNbljpgfhdfi()
    {
        return $this->nbljpgfhdfi;
    }

    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setNbljpgfhdfi($var)
    {
        GPBUtil::checkUint32($var);
        $this->nbljpgfhdfi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 max_score = 15;</code>
     * @return int
     */
    public function getMaxScore()
    {
        return $this->max_score;
    }

    /**
     * Generated from protobuf field <code>uint32 max_score = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxScore($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_score = $var;

        return $this;
    }

}
