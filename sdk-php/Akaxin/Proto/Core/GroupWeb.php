<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/core.proto

namespace Akaxin\Proto\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *群组：内嵌web类型消息
 *
 * 
 */
class GroupWeb extends \Google\Protobuf\Internal\Message
{
    /**
     *消息ID
     *
     * 
     */
    private $msg_id = '';
    /**
     *from
     *
     * 
     */
    private $site_user_id = '';
    /**
     *群ID(to)
     *
     * 
     */
    private $site_group_id = '';
    /**
     *统一使用web消息需要的代码内容
     *
     * 
     */
    private $web_code = '';
    /**
     *web消息的宽度
     *
     * 
     */
    private $width = 0;
    /**
     *web消息的高度
     *
     * 
     */
    private $height = 0;
    /**
     *消息时间
     *
     * 
     */
    private $time = 0;
    /**
     *跳转链接；如果为空则不跳转。
     *
     * 
     */
    private $href_url = '';

    public function __construct() {
        \GPBMetadata\Core\Core::initOnce();
        parent::__construct();
    }

    /**
     *消息ID
     *
     * 
     * @return string
     */
    public function getMsgId()
    {
        return $this->msg_id;
    }

    /**
     *消息ID
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setMsgId($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg_id = $var;

        return $this;
    }

    /**
     *from
     *
     * 
     * @return string
     */
    public function getSiteUserId()
    {
        return $this->site_user_id;
    }

    /**
     *from
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setSiteUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->site_user_id = $var;

        return $this;
    }

    /**
     *群ID(to)
     *
     * 
     * @return string
     */
    public function getSiteGroupId()
    {
        return $this->site_group_id;
    }

    /**
     *群ID(to)
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setSiteGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->site_group_id = $var;

        return $this;
    }

    /**
     *统一使用web消息需要的代码内容
     *
     * 
     * @return string
     */
    public function getWebCode()
    {
        return $this->web_code;
    }

    /**
     *统一使用web消息需要的代码内容
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setWebCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->web_code = $var;

        return $this;
    }

    /**
     *web消息的宽度
     *
     * 
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     *web消息的宽度
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
     *web消息的高度
     *
     * 
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     *web消息的高度
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
     *消息时间
     *
     * 
     * @return int|string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     *消息时间
     *
     * 
     * @param int|string $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->time = $var;

        return $this;
    }

    /**
     *跳转链接；如果为空则不跳转。
     *
     * 
     * @return string
     */
    public function getHrefUrl()
    {
        return $this->href_url;
    }

    /**
     *跳转链接；如果为空则不跳转。
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setHrefUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->href_url = $var;

        return $this;
    }

}

