<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HMFAPCHOMHC (7094)
 *
 * Generated from protobuf message <code>MonopolyDailySettleScNotify</code>
 */
class MonopolyDailySettleScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.GFJKKCMFEIL kifphhdkefp = 5;</code>
     */
    protected $kifphhdkefp = null;
    /**
     * Generated from protobuf field <code>uint32 dcclbmapdbc = 9;</code>
     */
    protected $dcclbmapdbc = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GFJKKCMFEIL $kifphhdkefp
     *     @type int $dcclbmapdbc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.GFJKKCMFEIL kifphhdkefp = 5;</code>
     * @return \GFJKKCMFEIL|null
     */
    public function getKifphhdkefp()
    {
        return $this->kifphhdkefp;
    }

    public function hasKifphhdkefp()
    {
        return isset($this->kifphhdkefp);
    }

    public function clearKifphhdkefp()
    {
        unset($this->kifphhdkefp);
    }

    /**
     * Generated from protobuf field <code>.GFJKKCMFEIL kifphhdkefp = 5;</code>
     * @param \GFJKKCMFEIL $var
     * @return $this
     */
    public function setKifphhdkefp($var)
    {
        GPBUtil::checkMessage($var, \GFJKKCMFEIL::class);
        $this->kifphhdkefp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dcclbmapdbc = 9;</code>
     * @return int
     */
    public function getDcclbmapdbc()
    {
        return $this->dcclbmapdbc;
    }

    /**
     * Generated from protobuf field <code>uint32 dcclbmapdbc = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setDcclbmapdbc($var)
    {
        GPBUtil::checkUint32($var);
        $this->dcclbmapdbc = $var;

        return $this;
    }

}

