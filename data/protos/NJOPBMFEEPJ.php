<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NJOPBMFEEPJ</code>
 */
class NJOPBMFEEPJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.KIMKOBLKDFJ pgpkplgbgae = 1;</code>
     */
    protected $pgpkplgbgae = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \KIMKOBLKDFJ $pgpkplgbgae
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.KIMKOBLKDFJ pgpkplgbgae = 1;</code>
     * @return \KIMKOBLKDFJ|null
     */
    public function getPgpkplgbgae()
    {
        return $this->pgpkplgbgae;
    }

    public function hasPgpkplgbgae()
    {
        return isset($this->pgpkplgbgae);
    }

    public function clearPgpkplgbgae()
    {
        unset($this->pgpkplgbgae);
    }

    /**
     * Generated from protobuf field <code>.KIMKOBLKDFJ pgpkplgbgae = 1;</code>
     * @param \KIMKOBLKDFJ $var
     * @return $this
     */
    public function setPgpkplgbgae($var)
    {
        GPBUtil::checkMessage($var, \KIMKOBLKDFJ::class);
        $this->pgpkplgbgae = $var;

        return $this;
    }

}

