<?php
/**
 * Created by PhpStorm.
 * User: scort
 * Date: 24-3-11
 * Time: 上午11:16
 */

namespace HelloWorld;

class HelloWorld
{
// 作者
    protected $author;

    /**
     * HelloWorld constructor.
     * @param string $author
     */
    public function __construct($author = 'scort')
    {
        $this->author = $author;
    }

    /**
     * 执行方法
     * @return string
     */
    public function info()
    {
        $info = "Hello World ! \n";
        $info .= "\t--Power By ";
        $info .= $this->author . "\n";
        return $info;
    }
}
