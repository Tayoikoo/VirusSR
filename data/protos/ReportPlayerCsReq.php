<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CLICFNKBHFE (2959)
 *
 * Generated from protobuf message <code>ReportPlayerCsReq</code>
 */
class ReportPlayerCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 uid = 8;</code>
     */
    protected $uid = 0;
    /**
     * Generated from protobuf field <code>uint32 nkdaefbkhbi = 4;</code>
     */
    protected $nkdaefbkhbi = 0;
    /**
     * Generated from protobuf field <code>string kleonnfgbpm = 15;</code>
     */
    protected $kleonnfgbpm = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $uid
     *     @type int $nkdaefbkhbi
     *     @type string $kleonnfgbpm
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 8;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 nkdaefbkhbi = 4;</code>
     * @return int
     */
    public function getNkdaefbkhbi()
    {
        return $this->nkdaefbkhbi;
    }

    /**
     * Generated from protobuf field <code>uint32 nkdaefbkhbi = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNkdaefbkhbi($var)
    {
        GPBUtil::checkUint32($var);
        $this->nkdaefbkhbi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string kleonnfgbpm = 15;</code>
     * @return string
     */
    public function getKleonnfgbpm()
    {
        return $this->kleonnfgbpm;
    }

    /**
     * Generated from protobuf field <code>string kleonnfgbpm = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setKleonnfgbpm($var)
    {
        GPBUtil::checkString($var, True);
        $this->kleonnfgbpm = $var;

        return $this;
    }

}

