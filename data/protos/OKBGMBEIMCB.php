<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OKBGMBEIMCB</code>
 */
class OKBGMBEIMCB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 id = 5;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>.HMIDPHOJGLB NDGNEOFKKKB = 1285;</code>
     */
    protected $NDGNEOFKKKB = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type \HMIDPHOJGLB $NDGNEOFKKKB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 id = 5;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 5;</code>
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
     * Generated from protobuf field <code>.HMIDPHOJGLB NDGNEOFKKKB = 1285;</code>
     * @return \HMIDPHOJGLB|null
     */
    public function getNDGNEOFKKKB()
    {
        return $this->NDGNEOFKKKB;
    }

    public function hasNDGNEOFKKKB()
    {
        return isset($this->NDGNEOFKKKB);
    }

    public function clearNDGNEOFKKKB()
    {
        unset($this->NDGNEOFKKKB);
    }

    /**
     * Generated from protobuf field <code>.HMIDPHOJGLB NDGNEOFKKKB = 1285;</code>
     * @param \HMIDPHOJGLB $var
     * @return $this
     */
    public function setNDGNEOFKKKB($var)
    {
        GPBUtil::checkMessage($var, \HMIDPHOJGLB::class);
        $this->NDGNEOFKKKB = $var;

        return $this;
    }

}
