<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GPPGHLDNKIN (7110)
 *
 * Generated from protobuf message <code>EvolveBuildReRandomStageScRsp</code>
 */
class EvolveBuildReRandomStageScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.GCNDMGBJHPN hepbeglclbp = 14;</code>
     */
    protected $hepbeglclbp = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GCNDMGBJHPN $hepbeglclbp
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.GCNDMGBJHPN hepbeglclbp = 14;</code>
     * @return \GCNDMGBJHPN|null
     */
    public function getHepbeglclbp()
    {
        return $this->hepbeglclbp;
    }

    public function hasHepbeglclbp()
    {
        return isset($this->hepbeglclbp);
    }

    public function clearHepbeglclbp()
    {
        unset($this->hepbeglclbp);
    }

    /**
     * Generated from protobuf field <code>.GCNDMGBJHPN hepbeglclbp = 14;</code>
     * @param \GCNDMGBJHPN $var
     * @return $this
     */
    public function setHepbeglclbp($var)
    {
        GPBUtil::checkMessage($var, \GCNDMGBJHPN::class);
        $this->hepbeglclbp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
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

