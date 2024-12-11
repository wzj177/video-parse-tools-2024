<?php
declare (strict_types=1);

namespace Wzj\ShortVideoParse\Tools;

use Wzj\ShortVideoParse\Interfaces\IVideo;

/**
 * Created By 1
 * Author：wzj、smalls
 * Email：wzj177@163.com
 * Date：2020/4/27 - 21:11
 **/
class QuanMingGaoXiao extends Base implements IVideo
{

    /**
     * 更新时间：2020/7/31
     * @param string $url
     * @return array
     */
    public function start(string $url): array
    {
        $this->make();
        $this->logic->setOriginalUrl($url);
        $this->logic->checkUrlHasTrue();
        $this->logic->setContentId();
        $this->logic->getContents();
        return $this->exportData();
    }

}