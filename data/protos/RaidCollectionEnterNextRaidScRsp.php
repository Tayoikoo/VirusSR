<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NHPACOHBECF (6957)
 *
 * Generated from protobuf message <code>RaidCollectionEnterNextRaidScRsp</code>
 */
class RaidCollectionEnterNextRaidScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.CHMBNFJJIJN scene = 11;</code>
     */
    protected $scene = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \CHMBNFJJIJN $scene
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
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
     * Generated from protobuf field <code>.CHMBNFJJIJN scene = 11;</code>
     * @return \CHMBNFJJIJN|null
     */
    public function getScene()
    {
        return $this->scene;
    }

    public function hasScene()
    {
        return isset($this->scene);
    }

    public function clearScene()
    {
        unset($this->scene);
    }

    /**
     * Generated from protobuf field <code>.CHMBNFJJIJN scene = 11;</code>
     * @param \CHMBNFJJIJN $var
     * @return $this
     */
    public function setScene($var)
    {
        GPBUtil::checkMessage($var, \CHMBNFJJIJN::class);
        $this->scene = $var;

        return $this;
    }

}

