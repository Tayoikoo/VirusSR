<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PPEOHGJBFHI (6082)
 *
 * Generated from protobuf message <code>RogueTournReEnterRogueCocoonStageCsReq</code>
 */
class RogueTournReEnterRogueCocoonStageCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool onhhplekhki = 2;</code>
     */
    protected $onhhplekhki = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $onhhplekhki
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool onhhplekhki = 2;</code>
     * @return bool
     */
    public function getOnhhplekhki()
    {
        return $this->onhhplekhki;
    }

    /**
     * Generated from protobuf field <code>bool onhhplekhki = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setOnhhplekhki($var)
    {
        GPBUtil::checkBool($var);
        $this->onhhplekhki = $var;

        return $this;
    }

}

