<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FHICEEHBBLN</code>
 */
class FHICEEHBBLN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.KOOLHIMDCDF pngjlpjhncg = 2;</code>
     */
    protected $pngjlpjhncg = null;
    /**
     * Generated from protobuf field <code>.AMNHLKNIGPJ opcdbeojmhg = 3;</code>
     */
    protected $opcdbeojmhg = null;
    /**
     * Generated from protobuf field <code>uint32 laghapikbid = 6;</code>
     */
    protected $laghapikbid = 0;
    /**
     * Generated from protobuf field <code>.LCEELLAFEIN fahiincjgoj = 8;</code>
     */
    protected $fahiincjgoj = null;
    /**
     * Generated from protobuf field <code>uint32 cmgmgnomjfn = 4;</code>
     */
    protected $cmgmgnomjfn = 0;
    /**
     * Generated from protobuf field <code>uint32 record_id = 9;</code>
     */
    protected $record_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \KOOLHIMDCDF $pngjlpjhncg
     *     @type \AMNHLKNIGPJ $opcdbeojmhg
     *     @type int $laghapikbid
     *     @type \LCEELLAFEIN $fahiincjgoj
     *     @type int $cmgmgnomjfn
     *     @type int $record_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.KOOLHIMDCDF pngjlpjhncg = 2;</code>
     * @return \KOOLHIMDCDF|null
     */
    public function getPngjlpjhncg()
    {
        return $this->pngjlpjhncg;
    }

    public function hasPngjlpjhncg()
    {
        return isset($this->pngjlpjhncg);
    }

    public function clearPngjlpjhncg()
    {
        unset($this->pngjlpjhncg);
    }

    /**
     * Generated from protobuf field <code>.KOOLHIMDCDF pngjlpjhncg = 2;</code>
     * @param \KOOLHIMDCDF $var
     * @return $this
     */
    public function setPngjlpjhncg($var)
    {
        GPBUtil::checkMessage($var, \KOOLHIMDCDF::class);
        $this->pngjlpjhncg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AMNHLKNIGPJ opcdbeojmhg = 3;</code>
     * @return \AMNHLKNIGPJ|null
     */
    public function getOpcdbeojmhg()
    {
        return $this->opcdbeojmhg;
    }

    public function hasOpcdbeojmhg()
    {
        return isset($this->opcdbeojmhg);
    }

    public function clearOpcdbeojmhg()
    {
        unset($this->opcdbeojmhg);
    }

    /**
     * Generated from protobuf field <code>.AMNHLKNIGPJ opcdbeojmhg = 3;</code>
     * @param \AMNHLKNIGPJ $var
     * @return $this
     */
    public function setOpcdbeojmhg($var)
    {
        GPBUtil::checkMessage($var, \AMNHLKNIGPJ::class);
        $this->opcdbeojmhg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 laghapikbid = 6;</code>
     * @return int
     */
    public function getLaghapikbid()
    {
        return $this->laghapikbid;
    }

    /**
     * Generated from protobuf field <code>uint32 laghapikbid = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setLaghapikbid($var)
    {
        GPBUtil::checkUint32($var);
        $this->laghapikbid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.LCEELLAFEIN fahiincjgoj = 8;</code>
     * @return \LCEELLAFEIN|null
     */
    public function getFahiincjgoj()
    {
        return $this->fahiincjgoj;
    }

    public function hasFahiincjgoj()
    {
        return isset($this->fahiincjgoj);
    }

    public function clearFahiincjgoj()
    {
        unset($this->fahiincjgoj);
    }

    /**
     * Generated from protobuf field <code>.LCEELLAFEIN fahiincjgoj = 8;</code>
     * @param \LCEELLAFEIN $var
     * @return $this
     */
    public function setFahiincjgoj($var)
    {
        GPBUtil::checkMessage($var, \LCEELLAFEIN::class);
        $this->fahiincjgoj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cmgmgnomjfn = 4;</code>
     * @return int
     */
    public function getCmgmgnomjfn()
    {
        return $this->cmgmgnomjfn;
    }

    /**
     * Generated from protobuf field <code>uint32 cmgmgnomjfn = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCmgmgnomjfn($var)
    {
        GPBUtil::checkUint32($var);
        $this->cmgmgnomjfn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 record_id = 9;</code>
     * @return int
     */
    public function getRecordId()
    {
        return $this->record_id;
    }

    /**
     * Generated from protobuf field <code>uint32 record_id = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setRecordId($var)
    {
        GPBUtil::checkUint32($var);
        $this->record_id = $var;

        return $this;
    }

}

