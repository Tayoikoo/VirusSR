<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IPJKAAIPOLL</code>
 */
class IPJKAAIPOLL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 EIGANLCJPOI = 1;</code>
     */
    protected $EIGANLCJPOI = 0;
    /**
     * Generated from protobuf field <code>uint32 KDJDJOMPBBH = 2;</code>
     */
    protected $KDJDJOMPBBH = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $EIGANLCJPOI
     *     @type int $KDJDJOMPBBH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 EIGANLCJPOI = 1;</code>
     * @return int
     */
    public function getEIGANLCJPOI()
    {
        return $this->EIGANLCJPOI;
    }

    /**
     * Generated from protobuf field <code>uint32 EIGANLCJPOI = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setEIGANLCJPOI($var)
    {
        GPBUtil::checkUint32($var);
        $this->EIGANLCJPOI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 KDJDJOMPBBH = 2;</code>
     * @return int
     */
    public function getKDJDJOMPBBH()
    {
        return $this->KDJDJOMPBBH;
    }

    /**
     * Generated from protobuf field <code>uint32 KDJDJOMPBBH = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setKDJDJOMPBBH($var)
    {
        GPBUtil::checkUint32($var);
        $this->KDJDJOMPBBH = $var;

        return $this;
    }

}
