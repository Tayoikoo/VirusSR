<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PGHKALGBFEK (1870)
 *
 * Generated from protobuf message <code>SyncRogueGetItemScNotify</code>
 */
class SyncRogueGetItemScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemList diieeffdgbi = 1;</code>
     */
    protected $diieeffdgbi = null;
    /**
     * Generated from protobuf field <code>.ItemList liflidfoacd = 10;</code>
     */
    protected $liflidfoacd = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemList $diieeffdgbi
     *     @type \ItemList $liflidfoacd
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemList diieeffdgbi = 1;</code>
     * @return \ItemList|null
     */
    public function getDiieeffdgbi()
    {
        return $this->diieeffdgbi;
    }

    public function hasDiieeffdgbi()
    {
        return isset($this->diieeffdgbi);
    }

    public function clearDiieeffdgbi()
    {
        unset($this->diieeffdgbi);
    }

    /**
     * Generated from protobuf field <code>.ItemList diieeffdgbi = 1;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setDiieeffdgbi($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->diieeffdgbi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList liflidfoacd = 10;</code>
     * @return \ItemList|null
     */
    public function getLiflidfoacd()
    {
        return $this->liflidfoacd;
    }

    public function hasLiflidfoacd()
    {
        return isset($this->liflidfoacd);
    }

    public function clearLiflidfoacd()
    {
        unset($this->liflidfoacd);
    }

    /**
     * Generated from protobuf field <code>.ItemList liflidfoacd = 10;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setLiflidfoacd($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->liflidfoacd = $var;

        return $this;
    }

}

