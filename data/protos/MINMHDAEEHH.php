<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MINMHDAEEHH</code>
 */
class MINMHDAEEHH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.EJJBPHADAOC AMLCAEIJMEE = 1;</code>
     */
    protected $AMLCAEIJMEE = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \EJJBPHADAOC $AMLCAEIJMEE
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.EJJBPHADAOC AMLCAEIJMEE = 1;</code>
     * @return \EJJBPHADAOC|null
     */
    public function getAMLCAEIJMEE()
    {
        return $this->AMLCAEIJMEE;
    }

    public function hasAMLCAEIJMEE()
    {
        return isset($this->AMLCAEIJMEE);
    }

    public function clearAMLCAEIJMEE()
    {
        unset($this->AMLCAEIJMEE);
    }

    /**
     * Generated from protobuf field <code>.EJJBPHADAOC AMLCAEIJMEE = 1;</code>
     * @param \EJJBPHADAOC $var
     * @return $this
     */
    public function setAMLCAEIJMEE($var)
    {
        GPBUtil::checkMessage($var, \EJJBPHADAOC::class);
        $this->AMLCAEIJMEE = $var;

        return $this;
    }

}

