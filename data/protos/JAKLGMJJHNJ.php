<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JAKLGMJJHNJ</code>
 */
class JAKLGMJJHNJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.FKIBOKPGACL EKIJBOCBMFE = 7;</code>
     */
    protected $EKIJBOCBMFE = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \FKIBOKPGACL $EKIJBOCBMFE
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.FKIBOKPGACL EKIJBOCBMFE = 7;</code>
     * @return \FKIBOKPGACL|null
     */
    public function getEKIJBOCBMFE()
    {
        return $this->EKIJBOCBMFE;
    }

    public function hasEKIJBOCBMFE()
    {
        return isset($this->EKIJBOCBMFE);
    }

    public function clearEKIJBOCBMFE()
    {
        unset($this->EKIJBOCBMFE);
    }

    /**
     * Generated from protobuf field <code>.FKIBOKPGACL EKIJBOCBMFE = 7;</code>
     * @param \FKIBOKPGACL $var
     * @return $this
     */
    public function setEKIJBOCBMFE($var)
    {
        GPBUtil::checkMessage($var, \FKIBOKPGACL::class);
        $this->EKIJBOCBMFE = $var;

        return $this;
    }

}
