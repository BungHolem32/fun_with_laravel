<?php
/**
 * Created by PhpStorm.
 * User: ronenk
 * Date: 3/30/2016
 * Time: 2:46 PM
 */

namespace App\Services\Ems;

class StandardEmail
{
    private $to;
    private $subject;
    private $content;
    private $type;
    
    /**
     * StandartEmail constructor.
     * @param String $to
     * @param String $subject
     * @param String $content
     * @param String $type
     */
    public function __construct($to=null, $subject=null, $content=null, $type=null)
    {
        $this->setTo($to);
        $this->setSubject($subject);
        $this->setContent($content);
        $this->setType($type);
    }

    public function toArray() {
        return [
            'to'        =>$this->getTo(),
            'subject'   =>$this->getSubject(),
            'content'   =>$this->getContent(),
            'type'      =>$this->getType()
        ];
    }

    private static function _TYPE($to, $subject, $content, $type) {return new StandardEmail($to, $subject, $content, $type);}
    public static function ALERT($to, $subject, $content) {return self::_TYPE($to, $subject, $content, __FUNCTION__);}
    public static function DEBUG($to, $subject, $content) {return self::_TYPE($to, $subject, $content, __FUNCTION__);}
    public static function NO_REPLY($to, $subject, $content) {return self::_TYPE($to, $subject, $content, __FUNCTION__);}

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}