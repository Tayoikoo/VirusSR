<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MLJIPDNGGAA (71)
 *
 * Generated from protobuf message <code>GetGameStateServiceConfigScRsp</code>
 */
class GetGameStateServiceConfigScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string gaenllhlhdn = 15;</code>
     */
    private $gaenllhlhdn;
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated string lnlaaacodic = 10;</code>
     */
    private $lnlaaacodic;
    /**
     * Generated from protobuf field <code>repeated string pjdncmemnjh = 12;</code>
     */
    private $pjdncmemnjh;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $gaenllhlhdn
     *     @type int $retcode
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $lnlaaacodic
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $pjdncmemnjh
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string gaenllhlhdn = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGaenllhlhdn()
    {
        return $this->gaenllhlhdn;
    }

    /**
     * Generated from protobuf field <code>repeated string gaenllhlhdn = 15;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGaenllhlhdn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->gaenllhlhdn = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
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
     * Generated from protobuf field <code>repeated string lnlaaacodic = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLnlaaacodic()
    {
        return $this->lnlaaacodic;
    }

    /**
     * Generated from protobuf field <code>repeated string lnlaaacodic = 10;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLnlaaacodic($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->lnlaaacodic = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string pjdncmemnjh = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPjdncmemnjh()
    {
        return $this->pjdncmemnjh;
    }

    /**
     * Generated from protobuf field <code>repeated string pjdncmemnjh = 12;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPjdncmemnjh($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->pjdncmemnjh = $arr;

        return $this;
    }

}
