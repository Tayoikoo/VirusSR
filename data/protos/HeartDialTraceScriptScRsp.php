<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OCFHAKNGBIL (6334)
 *
 * Generated from protobuf message <code>HeartDialTraceScriptScRsp</code>
 */
class HeartDialTraceScriptScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.ABMIFMMDLMK hdboajofegi = 11;</code>
     */
    protected $hdboajofegi = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \ABMIFMMDLMK $hdboajofegi
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
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
     * Generated from protobuf field <code>.ABMIFMMDLMK hdboajofegi = 11;</code>
     * @return \ABMIFMMDLMK|null
     */
    public function getHdboajofegi()
    {
        return $this->hdboajofegi;
    }

    public function hasHdboajofegi()
    {
        return isset($this->hdboajofegi);
    }

    public function clearHdboajofegi()
    {
        unset($this->hdboajofegi);
    }

    /**
     * Generated from protobuf field <code>.ABMIFMMDLMK hdboajofegi = 11;</code>
     * @param \ABMIFMMDLMK $var
     * @return $this
     */
    public function setHdboajofegi($var)
    {
        GPBUtil::checkMessage($var, \ABMIFMMDLMK::class);
        $this->hdboajofegi = $var;

        return $this;
    }

}

