<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JJCDFNAOLJP</code>
 */
class JJCDFNAOLJP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.JIIKNOGBKAF DBBDJBPBJPA = 13;</code>
     */
    protected $DBBDJBPBJPA = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \JIIKNOGBKAF $DBBDJBPBJPA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.JIIKNOGBKAF DBBDJBPBJPA = 13;</code>
     * @return \JIIKNOGBKAF|null
     */
    public function getDBBDJBPBJPA()
    {
        return $this->DBBDJBPBJPA;
    }

    public function hasDBBDJBPBJPA()
    {
        return isset($this->DBBDJBPBJPA);
    }

    public function clearDBBDJBPBJPA()
    {
        unset($this->DBBDJBPBJPA);
    }

    /**
     * Generated from protobuf field <code>.JIIKNOGBKAF DBBDJBPBJPA = 13;</code>
     * @param \JIIKNOGBKAF $var
     * @return $this
     */
    public function setDBBDJBPBJPA($var)
    {
        GPBUtil::checkMessage($var, \JIIKNOGBKAF::class);
        $this->DBBDJBPBJPA = $var;

        return $this;
    }

}

