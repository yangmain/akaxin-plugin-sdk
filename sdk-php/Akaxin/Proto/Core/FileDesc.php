<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/file.proto

namespace Akaxin\Proto\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 文件信息的描述
 *
 * 
 */
class FileDesc extends \Google\Protobuf\Internal\Message
{
    /**
     *语音的长度
     *
     * 
     */
    private $length = 0;
    /**
     *图片的宽
     *
     * 
     */
    private $width = 0;
    /**
     *图片的高
     *
     * 
     */
    private $height = 0;
    /**
     *视频的大小，单位kb
     *
     * 
     */
    private $size = 0;

    public function __construct() {
        \GPBMetadata\Core\File::initOnce();
        parent::__construct();
    }

    /**
     *语音的长度
     *
     * 
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     *语音的长度
     *
     * 
     * @param int $var
     * @return $this
     */
    public function setLength($var)
    {
        GPBUtil::checkInt32($var);
        $this->length = $var;

        return $this;
    }

    /**
     *图片的宽
     *
     * 
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     *图片的宽
     *
     * 
     * @param int $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkInt32($var);
        $this->width = $var;

        return $this;
    }

    /**
     *图片的高
     *
     * 
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     *图片的高
     *
     * 
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->height = $var;

        return $this;
    }

    /**
     *视频的大小，单位kb
     *
     * 
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     *视频的大小，单位kb
     *
     * 
     * @param int $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->size = $var;

        return $this;
    }

}

