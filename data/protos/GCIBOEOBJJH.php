<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GCIBOEOBJJH</code>
 */
class GCIBOEOBJJH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 pmfflmdckeb = 1;</code>
     */
    protected $pmfflmdckeb = 0;
    /**
     * Generated from protobuf field <code>.FightGameMode cckiobhjfbi = 2;</code>
     */
    protected $cckiobhjfbi = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $pmfflmdckeb
     *     @type int $cckiobhjfbi
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 pmfflmdckeb = 1;</code>
     * @return int|string
     */
    public function getPmfflmdckeb()
    {
        return $this->pmfflmdckeb;
    }

    /**
     * Generated from protobuf field <code>uint64 pmfflmdckeb = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPmfflmdckeb($var)
    {
        GPBUtil::checkUint64($var);
        $this->pmfflmdckeb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.FightGameMode cckiobhjfbi = 2;</code>
     * @return int
     */
    public function getCckiobhjfbi()
    {
        return $this->cckiobhjfbi;
    }

    /**
     * Generated from protobuf field <code>.FightGameMode cckiobhjfbi = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCckiobhjfbi($var)
    {
        GPBUtil::checkEnum($var, \FightGameMode::class);
        $this->cckiobhjfbi = $var;

        return $this;
    }

}
