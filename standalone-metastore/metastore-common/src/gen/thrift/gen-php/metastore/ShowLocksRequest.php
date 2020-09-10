<?php
namespace metastore;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class ShowLocksRequest
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'dbname',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'tablename',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'partname',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'isExtended',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
    );

    /**
     * @var string
     */
    public $dbname = null;
    /**
     * @var string
     */
    public $tablename = null;
    /**
     * @var string
     */
    public $partname = null;
    /**
     * @var bool
     */
    public $isExtended = false;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['dbname'])) {
                $this->dbname = $vals['dbname'];
            }
            if (isset($vals['tablename'])) {
                $this->tablename = $vals['tablename'];
            }
            if (isset($vals['partname'])) {
                $this->partname = $vals['partname'];
            }
            if (isset($vals['isExtended'])) {
                $this->isExtended = $vals['isExtended'];
            }
        }
    }

    public function getName()
    {
        return 'ShowLocksRequest';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->dbname);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->tablename);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->partname);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->isExtended);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('ShowLocksRequest');
        if ($this->dbname !== null) {
            $xfer += $output->writeFieldBegin('dbname', TType::STRING, 1);
            $xfer += $output->writeString($this->dbname);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tablename !== null) {
            $xfer += $output->writeFieldBegin('tablename', TType::STRING, 2);
            $xfer += $output->writeString($this->tablename);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->partname !== null) {
            $xfer += $output->writeFieldBegin('partname', TType::STRING, 3);
            $xfer += $output->writeString($this->partname);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->isExtended !== null) {
            $xfer += $output->writeFieldBegin('isExtended', TType::BOOL, 4);
            $xfer += $output->writeBool($this->isExtended);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}