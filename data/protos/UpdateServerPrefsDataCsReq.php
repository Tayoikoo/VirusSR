<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PDKFHHKNJBE (6167)
 *
 * Generated from protobuf message <code>UpdateServerPrefsDataCsReq</code>
 */
class UpdateServerPrefsDataCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ServerPrefs server_prefs = 10;</code>
     */
    protected $server_prefs = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ServerPrefs $server_prefs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ServerPrefs server_prefs = 10;</code>
     * @return \ServerPrefs|null
     */
    public function getServerPrefs()
    {
        return $this->server_prefs;
    }

    public function hasServerPrefs()
    {
        return isset($this->server_prefs);
    }

    public function clearServerPrefs()
    {
        unset($this->server_prefs);
    }

    /**
     * Generated from protobuf field <code>.ServerPrefs server_prefs = 10;</code>
     * @param \ServerPrefs $var
     * @return $this
     */
    public function setServerPrefs($var)
    {
        GPBUtil::checkMessage($var, \ServerPrefs::class);
        $this->server_prefs = $var;

        return $this;
    }

}

