<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JIKCLEMLIGP (6513)
 *
 * Generated from protobuf message <code>WolfBroGamePickupBulletScRsp</code>
 */
class WolfBroGamePickupBulletScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.AIOABIIGFKO lkhdjhfpnlh = 15;</code>
     */
    protected $lkhdjhfpnlh = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \AIOABIIGFKO $lkhdjhfpnlh
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.AIOABIIGFKO lkhdjhfpnlh = 15;</code>
     * @return \AIOABIIGFKO|null
     */
    public function getLkhdjhfpnlh()
    {
        return $this->lkhdjhfpnlh;
    }

    public function hasLkhdjhfpnlh()
    {
        return isset($this->lkhdjhfpnlh);
    }

    public function clearLkhdjhfpnlh()
    {
        unset($this->lkhdjhfpnlh);
    }

    /**
     * Generated from protobuf field <code>.AIOABIIGFKO lkhdjhfpnlh = 15;</code>
     * @param \AIOABIIGFKO $var
     * @return $this
     */
    public function setLkhdjhfpnlh($var)
    {
        GPBUtil::checkMessage($var, \AIOABIIGFKO::class);
        $this->lkhdjhfpnlh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}
