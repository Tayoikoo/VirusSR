<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LEJAFIKNBID (4817)
 *
 * Generated from protobuf message <code>AetherDivideRefreshEndlessScNotify</code>
 */
class AetherDivideRefreshEndlessScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 pebjfclbmgc = 11;</code>
     */
    protected $pebjfclbmgc = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $pebjfclbmgc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 pebjfclbmgc = 11;</code>
     * @return int
     */
    public function getPebjfclbmgc()
    {
        return $this->pebjfclbmgc;
    }

    /**
     * Generated from protobuf field <code>uint32 pebjfclbmgc = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setPebjfclbmgc($var)
    {
        GPBUtil::checkUint32($var);
        $this->pebjfclbmgc = $var;

        return $this;
    }

}
