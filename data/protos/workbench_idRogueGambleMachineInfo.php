<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>workbench_idRogueGambleMachineInfo</code>
 */
class workbench_idRogueGambleMachineInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 dekmckdjlmc = 9;</code>
     */
    protected $dekmckdjlmc = 0;
    /**
     * Generated from protobuf field <code>.BLKFPMIBJKO nofjpppaike = 14;</code>
     */
    protected $nofjpppaike = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $dekmckdjlmc
     *     @type \BLKFPMIBJKO $nofjpppaike
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 dekmckdjlmc = 9;</code>
     * @return int
     */
    public function getDekmckdjlmc()
    {
        return $this->dekmckdjlmc;
    }

    /**
     * Generated from protobuf field <code>uint32 dekmckdjlmc = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setDekmckdjlmc($var)
    {
        GPBUtil::checkUint32($var);
        $this->dekmckdjlmc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.BLKFPMIBJKO nofjpppaike = 14;</code>
     * @return \BLKFPMIBJKO|null
     */
    public function getNofjpppaike()
    {
        return $this->nofjpppaike;
    }

    public function hasNofjpppaike()
    {
        return isset($this->nofjpppaike);
    }

    public function clearNofjpppaike()
    {
        unset($this->nofjpppaike);
    }

    /**
     * Generated from protobuf field <code>.BLKFPMIBJKO nofjpppaike = 14;</code>
     * @param \BLKFPMIBJKO $var
     * @return $this
     */
    public function setNofjpppaike($var)
    {
        GPBUtil::checkMessage($var, \BLKFPMIBJKO::class);
        $this->nofjpppaike = $var;

        return $this;
    }

}

