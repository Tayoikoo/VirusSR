<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EEIADCHLFNB</code>
 */
class EEIADCHLFNB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .JIGMPADFPHE KJCDHKMKOPK = 14;</code>
     */
    private $KJCDHKMKOPK;
    /**
     * Generated from protobuf field <code>.EJLFEABGGID AFOAGCODJLK = 12;</code>
     */
    protected $AFOAGCODJLK = 0;
    /**
     * Generated from protobuf field <code>uint32 scene_event_id = 10;</code>
     */
    protected $scene_event_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\JIGMPADFPHE>|\Google\Protobuf\Internal\RepeatedField $KJCDHKMKOPK
     *     @type int $AFOAGCODJLK
     *     @type int $scene_event_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .JIGMPADFPHE KJCDHKMKOPK = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKJCDHKMKOPK()
    {
        return $this->KJCDHKMKOPK;
    }

    /**
     * Generated from protobuf field <code>repeated .JIGMPADFPHE KJCDHKMKOPK = 14;</code>
     * @param array<\JIGMPADFPHE>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKJCDHKMKOPK($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \JIGMPADFPHE::class);
        $this->KJCDHKMKOPK = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.EJLFEABGGID AFOAGCODJLK = 12;</code>
     * @return int
     */
    public function getAFOAGCODJLK()
    {
        return $this->AFOAGCODJLK;
    }

    /**
     * Generated from protobuf field <code>.EJLFEABGGID AFOAGCODJLK = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setAFOAGCODJLK($var)
    {
        GPBUtil::checkEnum($var, \EJLFEABGGID::class);
        $this->AFOAGCODJLK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 scene_event_id = 10;</code>
     * @return int
     */
    public function getSceneEventId()
    {
        return $this->scene_event_id;
    }

    /**
     * Generated from protobuf field <code>uint32 scene_event_id = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setSceneEventId($var)
    {
        GPBUtil::checkUint32($var);
        $this->scene_event_id = $var;

        return $this;
    }

}

