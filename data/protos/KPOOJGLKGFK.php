<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KPOOJGLKGFK</code>
 */
class KPOOJGLKGFK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 pnbapafolbl = 15;</code>
     */
    protected $pnbapafolbl = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $pnbapafolbl
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 pnbapafolbl = 15;</code>
     * @return int
     */
    public function getPnbapafolbl()
    {
        return $this->pnbapafolbl;
    }

    /**
     * Generated from protobuf field <code>uint32 pnbapafolbl = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setPnbapafolbl($var)
    {
        GPBUtil::checkUint32($var);
        $this->pnbapafolbl = $var;

        return $this;
    }

}
