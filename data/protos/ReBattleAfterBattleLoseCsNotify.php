<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EDOBKGFNHLN (146)
 *
 * Generated from protobuf message <code>ReBattleAfterBattleLoseCsNotify</code>
 */
class ReBattleAfterBattleLoseCsNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool ejgpcipheed = 6;</code>
     */
    protected $ejgpcipheed = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $ejgpcipheed
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool ejgpcipheed = 6;</code>
     * @return bool
     */
    public function getEjgpcipheed()
    {
        return $this->ejgpcipheed;
    }

    /**
     * Generated from protobuf field <code>bool ejgpcipheed = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setEjgpcipheed($var)
    {
        GPBUtil::checkBool($var);
        $this->ejgpcipheed = $var;

        return $this;
    }

}
