<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EOCBLHFPDBD (3288)
 *
 * Generated from protobuf message <code>TakeKilledPunkLordMonsterScoreCsReq</code>
 */
class TakeKilledPunkLordMonsterScoreCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.PunkLordMonsterKey babdbkncdgm = 13;</code>
     */
    protected $babdbkncdgm = null;
    /**
     * Generated from protobuf field <code>bool bdikiinohmf = 6;</code>
     */
    protected $bdikiinohmf = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \PunkLordMonsterKey $babdbkncdgm
     *     @type bool $bdikiinohmf
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.PunkLordMonsterKey babdbkncdgm = 13;</code>
     * @return \PunkLordMonsterKey|null
     */
    public function getBabdbkncdgm()
    {
        return $this->babdbkncdgm;
    }

    public function hasBabdbkncdgm()
    {
        return isset($this->babdbkncdgm);
    }

    public function clearBabdbkncdgm()
    {
        unset($this->babdbkncdgm);
    }

    /**
     * Generated from protobuf field <code>.PunkLordMonsterKey babdbkncdgm = 13;</code>
     * @param \PunkLordMonsterKey $var
     * @return $this
     */
    public function setBabdbkncdgm($var)
    {
        GPBUtil::checkMessage($var, \PunkLordMonsterKey::class);
        $this->babdbkncdgm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool bdikiinohmf = 6;</code>
     * @return bool
     */
    public function getBdikiinohmf()
    {
        return $this->bdikiinohmf;
    }

    /**
     * Generated from protobuf field <code>bool bdikiinohmf = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setBdikiinohmf($var)
    {
        GPBUtil::checkBool($var);
        $this->bdikiinohmf = $var;

        return $this;
    }

}

