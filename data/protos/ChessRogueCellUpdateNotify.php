<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JBFHKJGILEJ (5442)
 *
 * Generated from protobuf message <code>ChessRogueCellUpdateNotify</code>
 */
class ChessRogueCellUpdateNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.PJDEMLINNGF jnpgebhaohl = 15;</code>
     */
    protected $jnpgebhaohl = 0;
    /**
     * Generated from protobuf field <code>.FAPFDNFCCIH reason = 11;</code>
     */
    protected $reason = 0;
    /**
     * Generated from protobuf field <code>uint32 hedddekoolb = 7;</code>
     */
    protected $hedddekoolb = 0;
    /**
     * Generated from protobuf field <code>repeated .ChessRogueCell bodgiilmdpn = 8;</code>
     */
    private $bodgiilmdpn;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $jnpgebhaohl
     *     @type int $reason
     *     @type int $hedddekoolb
     *     @type array<\ChessRogueCell>|\Google\Protobuf\Internal\RepeatedField $bodgiilmdpn
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.PJDEMLINNGF jnpgebhaohl = 15;</code>
     * @return int
     */
    public function getJnpgebhaohl()
    {
        return $this->jnpgebhaohl;
    }

    /**
     * Generated from protobuf field <code>.PJDEMLINNGF jnpgebhaohl = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setJnpgebhaohl($var)
    {
        GPBUtil::checkEnum($var, \PJDEMLINNGF::class);
        $this->jnpgebhaohl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.FAPFDNFCCIH reason = 11;</code>
     * @return int
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Generated from protobuf field <code>.FAPFDNFCCIH reason = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkEnum($var, \FAPFDNFCCIH::class);
        $this->reason = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 hedddekoolb = 7;</code>
     * @return int
     */
    public function getHedddekoolb()
    {
        return $this->hedddekoolb;
    }

    /**
     * Generated from protobuf field <code>uint32 hedddekoolb = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setHedddekoolb($var)
    {
        GPBUtil::checkUint32($var);
        $this->hedddekoolb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .ChessRogueCell bodgiilmdpn = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBodgiilmdpn()
    {
        return $this->bodgiilmdpn;
    }

    /**
     * Generated from protobuf field <code>repeated .ChessRogueCell bodgiilmdpn = 8;</code>
     * @param array<\ChessRogueCell>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBodgiilmdpn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ChessRogueCell::class);
        $this->bodgiilmdpn = $arr;

        return $this;
    }

}

