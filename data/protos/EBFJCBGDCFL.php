<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EBFJCBGDCFL</code>
 */
class EBFJCBGDCFL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.IONNOLIHAAG inppfdjhejn = 4;</code>
     */
    protected $inppfdjhejn = null;
    /**
     * Generated from protobuf field <code>uint32 pfkhhkimnbp = 12;</code>
     */
    protected $pfkhhkimnbp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \IONNOLIHAAG $inppfdjhejn
     *     @type int $pfkhhkimnbp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.IONNOLIHAAG inppfdjhejn = 4;</code>
     * @return \IONNOLIHAAG|null
     */
    public function getInppfdjhejn()
    {
        return $this->inppfdjhejn;
    }

    public function hasInppfdjhejn()
    {
        return isset($this->inppfdjhejn);
    }

    public function clearInppfdjhejn()
    {
        unset($this->inppfdjhejn);
    }

    /**
     * Generated from protobuf field <code>.IONNOLIHAAG inppfdjhejn = 4;</code>
     * @param \IONNOLIHAAG $var
     * @return $this
     */
    public function setInppfdjhejn($var)
    {
        GPBUtil::checkMessage($var, \IONNOLIHAAG::class);
        $this->inppfdjhejn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 pfkhhkimnbp = 12;</code>
     * @return int
     */
    public function getPfkhhkimnbp()
    {
        return $this->pfkhhkimnbp;
    }

    /**
     * Generated from protobuf field <code>uint32 pfkhhkimnbp = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setPfkhhkimnbp($var)
    {
        GPBUtil::checkUint32($var);
        $this->pfkhhkimnbp = $var;

        return $this;
    }

}

