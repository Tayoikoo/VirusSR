<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AACJADLEHND</code>
 */
class AACJADLEHND extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 BMCIDCPNBHF = 9;</code>
     */
    protected $BMCIDCPNBHF = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $BMCIDCPNBHF
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 BMCIDCPNBHF = 9;</code>
     * @return int
     */
    public function getBMCIDCPNBHF()
    {
        return $this->BMCIDCPNBHF;
    }

    /**
     * Generated from protobuf field <code>uint32 BMCIDCPNBHF = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setBMCIDCPNBHF($var)
    {
        GPBUtil::checkUint32($var);
        $this->BMCIDCPNBHF = $var;

        return $this;
    }

}

