<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HDFAEDEAKOA (4148)
 *
 * Generated from protobuf message <code>UpdateGunPlayDataScRsp</code>
 */
class UpdateGunPlayDataScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.GCNAPNPOPEK mdgbognepji = 6;</code>
     */
    protected $mdgbognepji = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \GCNAPNPOPEK $mdgbognepji
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.GCNAPNPOPEK mdgbognepji = 6;</code>
     * @return \GCNAPNPOPEK|null
     */
    public function getMdgbognepji()
    {
        return $this->mdgbognepji;
    }

    public function hasMdgbognepji()
    {
        return isset($this->mdgbognepji);
    }

    public function clearMdgbognepji()
    {
        unset($this->mdgbognepji);
    }

    /**
     * Generated from protobuf field <code>.GCNAPNPOPEK mdgbognepji = 6;</code>
     * @param \GCNAPNPOPEK $var
     * @return $this
     */
    public function setMdgbognepji($var)
    {
        GPBUtil::checkMessage($var, \GCNAPNPOPEK::class);
        $this->mdgbognepji = $var;

        return $this;
    }

}
