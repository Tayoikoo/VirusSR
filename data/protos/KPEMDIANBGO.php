<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KPEMDIANBGO</code>
 */
class KPEMDIANBGO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ekdpoigoncd = 2;</code>
     */
    protected $ekdpoigoncd = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 bjbfoakiggh = 7;</code>
     */
    private $bjbfoakiggh;
    /**
     * Generated from protobuf field <code>uint32 pabihfgnpkg = 4;</code>
     */
    protected $pabihfgnpkg = 0;
    /**
     * Generated from protobuf field <code>uint32 haodfemapml = 9;</code>
     */
    protected $haodfemapml = 0;
    /**
     * Generated from protobuf field <code>repeated .ICNEDOCPBPP ikhobnldecj = 6;</code>
     */
    private $ikhobnldecj;
    /**
     * Generated from protobuf field <code>uint32 dolnfgmpogc = 10;</code>
     */
    protected $dolnfgmpogc = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ekdpoigoncd
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $bjbfoakiggh
     *     @type int $pabihfgnpkg
     *     @type int $haodfemapml
     *     @type array<\ICNEDOCPBPP>|\Google\Protobuf\Internal\RepeatedField $ikhobnldecj
     *     @type int $dolnfgmpogc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ekdpoigoncd = 2;</code>
     * @return int
     */
    public function getEkdpoigoncd()
    {
        return $this->ekdpoigoncd;
    }

    /**
     * Generated from protobuf field <code>uint32 ekdpoigoncd = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEkdpoigoncd($var)
    {
        GPBUtil::checkUint32($var);
        $this->ekdpoigoncd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 bjbfoakiggh = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBjbfoakiggh()
    {
        return $this->bjbfoakiggh;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 bjbfoakiggh = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBjbfoakiggh($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->bjbfoakiggh = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 pabihfgnpkg = 4;</code>
     * @return int
     */
    public function getPabihfgnpkg()
    {
        return $this->pabihfgnpkg;
    }

    /**
     * Generated from protobuf field <code>uint32 pabihfgnpkg = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPabihfgnpkg($var)
    {
        GPBUtil::checkUint32($var);
        $this->pabihfgnpkg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 haodfemapml = 9;</code>
     * @return int
     */
    public function getHaodfemapml()
    {
        return $this->haodfemapml;
    }

    /**
     * Generated from protobuf field <code>uint32 haodfemapml = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setHaodfemapml($var)
    {
        GPBUtil::checkUint32($var);
        $this->haodfemapml = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .ICNEDOCPBPP ikhobnldecj = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIkhobnldecj()
    {
        return $this->ikhobnldecj;
    }

    /**
     * Generated from protobuf field <code>repeated .ICNEDOCPBPP ikhobnldecj = 6;</code>
     * @param array<\ICNEDOCPBPP>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIkhobnldecj($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ICNEDOCPBPP::class);
        $this->ikhobnldecj = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dolnfgmpogc = 10;</code>
     * @return int
     */
    public function getDolnfgmpogc()
    {
        return $this->dolnfgmpogc;
    }

    /**
     * Generated from protobuf field <code>uint32 dolnfgmpogc = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setDolnfgmpogc($var)
    {
        GPBUtil::checkUint32($var);
        $this->dolnfgmpogc = $var;

        return $this;
    }

}
