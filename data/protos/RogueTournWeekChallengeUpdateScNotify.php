<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MOGEBDDGFIK (6050)
 *
 * Generated from protobuf message <code>RogueTournWeekChallengeUpdateScNotify</code>
 */
class RogueTournWeekChallengeUpdateScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.GMFJGMBPAFF fbilooecbad = 7;</code>
     */
    protected $fbilooecbad = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GMFJGMBPAFF $fbilooecbad
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.GMFJGMBPAFF fbilooecbad = 7;</code>
     * @return \GMFJGMBPAFF|null
     */
    public function getFbilooecbad()
    {
        return $this->fbilooecbad;
    }

    public function hasFbilooecbad()
    {
        return isset($this->fbilooecbad);
    }

    public function clearFbilooecbad()
    {
        unset($this->fbilooecbad);
    }

    /**
     * Generated from protobuf field <code>.GMFJGMBPAFF fbilooecbad = 7;</code>
     * @param \GMFJGMBPAFF $var
     * @return $this
     */
    public function setFbilooecbad($var)
    {
        GPBUtil::checkMessage($var, \GMFJGMBPAFF::class);
        $this->fbilooecbad = $var;

        return $this;
    }

}

