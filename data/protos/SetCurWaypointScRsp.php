<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MLMKPIFIFIB (427)
 *
 * Generated from protobuf message <code>SetCurWaypointScRsp</code>
 */
class SetCurWaypointScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 pjgihhnckdp = 2;</code>
     */
    protected $pjgihhnckdp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $pjgihhnckdp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
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
     * Generated from protobuf field <code>uint32 pjgihhnckdp = 2;</code>
     * @return int
     */
    public function getPjgihhnckdp()
    {
        return $this->pjgihhnckdp;
    }

    /**
     * Generated from protobuf field <code>uint32 pjgihhnckdp = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPjgihhnckdp($var)
    {
        GPBUtil::checkUint32($var);
        $this->pjgihhnckdp = $var;

        return $this;
    }

}

