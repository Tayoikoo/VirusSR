<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FIADGIIPLJG (5414)
 *
 * Generated from protobuf message <code>GetChessRogueBuffEnhanceInfoScRsp</code>
 */
class GetChessRogueBuffEnhanceInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.CFANNKOKNCA npbamcnhafj = 7;</code>
     */
    protected $npbamcnhafj = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \CFANNKOKNCA $npbamcnhafj
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.CFANNKOKNCA npbamcnhafj = 7;</code>
     * @return \CFANNKOKNCA|null
     */
    public function getNpbamcnhafj()
    {
        return $this->npbamcnhafj;
    }

    public function hasNpbamcnhafj()
    {
        return isset($this->npbamcnhafj);
    }

    public function clearNpbamcnhafj()
    {
        unset($this->npbamcnhafj);
    }

    /**
     * Generated from protobuf field <code>.CFANNKOKNCA npbamcnhafj = 7;</code>
     * @param \CFANNKOKNCA $var
     * @return $this
     */
    public function setNpbamcnhafj($var)
    {
        GPBUtil::checkMessage($var, \CFANNKOKNCA::class);
        $this->npbamcnhafj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}

