<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CGPGBDPNNDL</code>
 */
class CGPGBDPNNDL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.GDFGFDNCFDG lknagoklogi = 8;</code>
     */
    protected $lknagoklogi = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GDFGFDNCFDG $lknagoklogi
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.GDFGFDNCFDG lknagoklogi = 8;</code>
     * @return \GDFGFDNCFDG|null
     */
    public function getLknagoklogi()
    {
        return $this->lknagoklogi;
    }

    public function hasLknagoklogi()
    {
        return isset($this->lknagoklogi);
    }

    public function clearLknagoklogi()
    {
        unset($this->lknagoklogi);
    }

    /**
     * Generated from protobuf field <code>.GDFGFDNCFDG lknagoklogi = 8;</code>
     * @param \GDFGFDNCFDG $var
     * @return $this
     */
    public function setLknagoklogi($var)
    {
        GPBUtil::checkMessage($var, \GDFGFDNCFDG::class);
        $this->lknagoklogi = $var;

        return $this;
    }

}
