<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LFIBPOJKAAF (1474)
 *
 * Generated from protobuf message <code>GetCurSceneInfoScRsp</code>
 */
class GetCurSceneInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.SceneInfo scene = 1;</code>
     */
    protected $scene = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \SceneInfo $scene
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.SceneInfo scene = 1;</code>
     * @return \SceneInfo|null
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
     * Generated from protobuf field <code>.SceneInfo scene = 1;</code>
     * @param \SceneInfo $var
     * @return $this
     */
    public function setScene($var)
    {
        GPBUtil::checkMessage($var, \SceneInfo::class);
        $this->scene = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}

