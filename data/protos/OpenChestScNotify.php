<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GMPMCPIELEL (1469)
 *
 * Generated from protobuf message <code>OpenChestScNotify</code>
 */
class OpenChestScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ccfnindaogj = 6;</code>
     */
    protected $ccfnindaogj = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ccfnindaogj
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ccfnindaogj = 6;</code>
     * @return int
     */
    public function getCcfnindaogj()
    {
        return $this->ccfnindaogj;
    }

    /**
     * Generated from protobuf field <code>uint32 ccfnindaogj = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCcfnindaogj($var)
    {
        GPBUtil::checkUint32($var);
        $this->ccfnindaogj = $var;

        return $this;
    }

}
