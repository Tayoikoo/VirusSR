<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OLADBIHNFMP (6001)
 *
 * Generated from protobuf message <code>RogueEndlessActivityBattleEndScNotify</code>
 */
class RogueEndlessActivityBattleEndScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.DMJLHJHCMEN cinngpdeiek = 13;</code>
     */
    protected $cinngpdeiek = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \DMJLHJHCMEN $cinngpdeiek
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.DMJLHJHCMEN cinngpdeiek = 13;</code>
     * @return \DMJLHJHCMEN|null
     */
    public function getCinngpdeiek()
    {
        return $this->cinngpdeiek;
    }

    public function hasCinngpdeiek()
    {
        return isset($this->cinngpdeiek);
    }

    public function clearCinngpdeiek()
    {
        unset($this->cinngpdeiek);
    }

    /**
     * Generated from protobuf field <code>.DMJLHJHCMEN cinngpdeiek = 13;</code>
     * @param \DMJLHJHCMEN $var
     * @return $this
     */
    public function setCinngpdeiek($var)
    {
        GPBUtil::checkMessage($var, \DMJLHJHCMEN::class);
        $this->cinngpdeiek = $var;

        return $this;
    }

}

