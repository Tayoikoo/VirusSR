<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FGEOBNDMGEM (4984)
 *
 * Generated from protobuf message <code>FinishChapterScNotify</code>
 */
class FinishChapterScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ECEDILGLGIK ljnodemaecd = 10;</code>
     */
    protected $ljnodemaecd = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ECEDILGLGIK $ljnodemaecd
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ECEDILGLGIK ljnodemaecd = 10;</code>
     * @return \ECEDILGLGIK|null
     */
    public function getLjnodemaecd()
    {
        return $this->ljnodemaecd;
    }

    public function hasLjnodemaecd()
    {
        return isset($this->ljnodemaecd);
    }

    public function clearLjnodemaecd()
    {
        unset($this->ljnodemaecd);
    }

    /**
     * Generated from protobuf field <code>.ECEDILGLGIK ljnodemaecd = 10;</code>
     * @param \ECEDILGLGIK $var
     * @return $this
     */
    public function setLjnodemaecd($var)
    {
        GPBUtil::checkMessage($var, \ECEDILGLGIK::class);
        $this->ljnodemaecd = $var;

        return $this;
    }

}

