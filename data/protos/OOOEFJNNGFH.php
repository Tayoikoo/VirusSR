<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OOOEFJNNGFH</code>
 */
class OOOEFJNNGFH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.LAKJKLKIIAO PEPHONIOECA = 3;</code>
     */
    protected $PEPHONIOECA = 0;
    /**
     * Generated from protobuf field <code>.HIAAMAPMJIA MHBCMNCKKEB = 14;</code>
     */
    protected $MHBCMNCKKEB = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $PEPHONIOECA
     *     @type \HIAAMAPMJIA $MHBCMNCKKEB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.LAKJKLKIIAO PEPHONIOECA = 3;</code>
     * @return int
     */
    public function getPEPHONIOECA()
    {
        return $this->PEPHONIOECA;
    }

    /**
     * Generated from protobuf field <code>.LAKJKLKIIAO PEPHONIOECA = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPEPHONIOECA($var)
    {
        GPBUtil::checkEnum($var, \LAKJKLKIIAO::class);
        $this->PEPHONIOECA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.HIAAMAPMJIA MHBCMNCKKEB = 14;</code>
     * @return \HIAAMAPMJIA|null
     */
    public function getMHBCMNCKKEB()
    {
        return $this->MHBCMNCKKEB;
    }

    public function hasMHBCMNCKKEB()
    {
        return isset($this->MHBCMNCKKEB);
    }

    public function clearMHBCMNCKKEB()
    {
        unset($this->MHBCMNCKKEB);
    }

    /**
     * Generated from protobuf field <code>.HIAAMAPMJIA MHBCMNCKKEB = 14;</code>
     * @param \HIAAMAPMJIA $var
     * @return $this
     */
    public function setMHBCMNCKKEB($var)
    {
        GPBUtil::checkMessage($var, \HIAAMAPMJIA::class);
        $this->MHBCMNCKKEB = $var;

        return $this;
    }

}
