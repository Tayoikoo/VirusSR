<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GDBIEMNFEBD</code>
 */
class GDBIEMNFEBD extends \Google\Protobuf\Internal\Message
{
    protected $info_case;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \BMBPBHMOABJ $ggkpilogemk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.BMBPBHMOABJ ggkpilogemk = 14;</code>
     * @return \BMBPBHMOABJ|null
     */
    public function getGgkpilogemk()
    {
        return $this->readOneof(14);
    }

    public function hasGgkpilogemk()
    {
        return $this->hasOneof(14);
    }

    /**
     * Generated from protobuf field <code>.BMBPBHMOABJ ggkpilogemk = 14;</code>
     * @param \BMBPBHMOABJ $var
     * @return $this
     */
    public function setGgkpilogemk($var)
    {
        GPBUtil::checkMessage($var, \BMBPBHMOABJ::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getInfoCase()
    {
        return $this->whichOneof("info_case");
    }

}
