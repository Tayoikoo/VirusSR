<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OEPEFKHNEIH (2449)
 *
 * Generated from protobuf message <code>GetChallengeRecommendLineupListScRsp</code>
 */
class GetChallengeRecommendLineupListScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 challenge_id = 8;</code>
     */
    protected $challenge_id = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .LOBALPNNPNL hobeflekpfg = 12;</code>
     */
    private $hobeflekpfg;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $challenge_id
     *     @type int $retcode
     *     @type array<\LOBALPNNPNL>|\Google\Protobuf\Internal\RepeatedField $hobeflekpfg
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 challenge_id = 8;</code>
     * @return int
     */
    public function getChallengeId()
    {
        return $this->challenge_id;
    }

    /**
     * Generated from protobuf field <code>uint32 challenge_id = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setChallengeId($var)
    {
        GPBUtil::checkUint32($var);
        $this->challenge_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
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
     * Generated from protobuf field <code>repeated .LOBALPNNPNL hobeflekpfg = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHobeflekpfg()
    {
        return $this->hobeflekpfg;
    }

    /**
     * Generated from protobuf field <code>repeated .LOBALPNNPNL hobeflekpfg = 12;</code>
     * @param array<\LOBALPNNPNL>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHobeflekpfg($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \LOBALPNNPNL::class);
        $this->hobeflekpfg = $arr;

        return $this;
    }

}
