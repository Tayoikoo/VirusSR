<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PNBGOCGOKMA</code>
 */
class PNBGOCGOKMA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool JOBJHNJJNDI = 8;</code>
     */
    protected $JOBJHNJJNDI = false;
    /**
     * Generated from protobuf field <code>uint32 FPHPEJPOBGJ = 5;</code>
     */
    protected $FPHPEJPOBGJ = 0;
    /**
     * Generated from protobuf field <code>repeated .FFLMODAKJOC PNAMFGLFKAI = 9;</code>
     */
    private $PNAMFGLFKAI;
    /**
     * Generated from protobuf field <code>.JKEAOFKCAGO LMMLDDKKKAI = 11;</code>
     */
    protected $LMMLDDKKKAI = null;
    /**
     * Generated from protobuf field <code>int32 LGCHOINHLDJ = 7;</code>
     */
    protected $LGCHOINHLDJ = 0;
    /**
     * Generated from protobuf field <code>.PEMFPDOPAFN CCMFCONAOGP = 10;</code>
     */
    protected $CCMFCONAOGP = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .FCPOCIKPEBN MOOKNNKOEHL = 13;</code>
     */
    private $MOOKNNKOEHL;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $JOBJHNJJNDI
     *     @type int $FPHPEJPOBGJ
     *     @type array<\FFLMODAKJOC>|\Google\Protobuf\Internal\RepeatedField $PNAMFGLFKAI
     *     @type \JKEAOFKCAGO $LMMLDDKKKAI
     *     @type int $LGCHOINHLDJ
     *     @type \PEMFPDOPAFN $CCMFCONAOGP
     *     @type int $retcode
     *     @type array<\FCPOCIKPEBN>|\Google\Protobuf\Internal\RepeatedField $MOOKNNKOEHL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool JOBJHNJJNDI = 8;</code>
     * @return bool
     */
    public function getJOBJHNJJNDI()
    {
        return $this->JOBJHNJJNDI;
    }

    /**
     * Generated from protobuf field <code>bool JOBJHNJJNDI = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setJOBJHNJJNDI($var)
    {
        GPBUtil::checkBool($var);
        $this->JOBJHNJJNDI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 FPHPEJPOBGJ = 5;</code>
     * @return int
     */
    public function getFPHPEJPOBGJ()
    {
        return $this->FPHPEJPOBGJ;
    }

    /**
     * Generated from protobuf field <code>uint32 FPHPEJPOBGJ = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setFPHPEJPOBGJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->FPHPEJPOBGJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .FFLMODAKJOC PNAMFGLFKAI = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPNAMFGLFKAI()
    {
        return $this->PNAMFGLFKAI;
    }

    /**
     * Generated from protobuf field <code>repeated .FFLMODAKJOC PNAMFGLFKAI = 9;</code>
     * @param array<\FFLMODAKJOC>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPNAMFGLFKAI($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \FFLMODAKJOC::class);
        $this->PNAMFGLFKAI = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.JKEAOFKCAGO LMMLDDKKKAI = 11;</code>
     * @return \JKEAOFKCAGO|null
     */
    public function getLMMLDDKKKAI()
    {
        return $this->LMMLDDKKKAI;
    }

    public function hasLMMLDDKKKAI()
    {
        return isset($this->LMMLDDKKKAI);
    }

    public function clearLMMLDDKKKAI()
    {
        unset($this->LMMLDDKKKAI);
    }

    /**
     * Generated from protobuf field <code>.JKEAOFKCAGO LMMLDDKKKAI = 11;</code>
     * @param \JKEAOFKCAGO $var
     * @return $this
     */
    public function setLMMLDDKKKAI($var)
    {
        GPBUtil::checkMessage($var, \JKEAOFKCAGO::class);
        $this->LMMLDDKKKAI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 LGCHOINHLDJ = 7;</code>
     * @return int
     */
    public function getLGCHOINHLDJ()
    {
        return $this->LGCHOINHLDJ;
    }

    /**
     * Generated from protobuf field <code>int32 LGCHOINHLDJ = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLGCHOINHLDJ($var)
    {
        GPBUtil::checkInt32($var);
        $this->LGCHOINHLDJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PEMFPDOPAFN CCMFCONAOGP = 10;</code>
     * @return \PEMFPDOPAFN|null
     */
    public function getCCMFCONAOGP()
    {
        return $this->CCMFCONAOGP;
    }

    public function hasCCMFCONAOGP()
    {
        return isset($this->CCMFCONAOGP);
    }

    public function clearCCMFCONAOGP()
    {
        unset($this->CCMFCONAOGP);
    }

    /**
     * Generated from protobuf field <code>.PEMFPDOPAFN CCMFCONAOGP = 10;</code>
     * @param \PEMFPDOPAFN $var
     * @return $this
     */
    public function setCCMFCONAOGP($var)
    {
        GPBUtil::checkMessage($var, \PEMFPDOPAFN::class);
        $this->CCMFCONAOGP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
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
     * Generated from protobuf field <code>repeated .FCPOCIKPEBN MOOKNNKOEHL = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMOOKNNKOEHL()
    {
        return $this->MOOKNNKOEHL;
    }

    /**
     * Generated from protobuf field <code>repeated .FCPOCIKPEBN MOOKNNKOEHL = 13;</code>
     * @param array<\FCPOCIKPEBN>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMOOKNNKOEHL($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \FCPOCIKPEBN::class);
        $this->MOOKNNKOEHL = $arr;

        return $this;
    }

}

