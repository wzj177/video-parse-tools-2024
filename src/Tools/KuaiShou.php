<?php
declare (strict_types=1);

namespace Wzj\ShortVideoParse\Tools;

use Wzj\ShortVideoParse\Interfaces\IVideo;
use Wzj\ShortVideoParse\Logic\H5KuaiShouLogic;

/**
 * Created By 1
 * Author：wzj、smalls
 * Email：wzj177@163.com
 * Date：2020/4/27 - 0:46
 **/
class KuaiShou extends Base implements IVideo
{

    private $cookie = '';

    /**
     * 更新时间：2020/10/25
     * @param string $url
     * @return array
     */
    public function start(string $url): array
    {
        $this->logic = new H5KuaiShouLogic($this, 'kuaishou');
        $this->logic->setOriginalUrl($url);
        $this->logic->checkUrlHasTrue();
        $this->logic->setContents();
        return $this->exportData();
    }

    /**
     * 更新时间：2020/7/31
     * @param string $url
     * @return array
     * @deprecated
     */
    public function startGetH5(string $url): array
    {
        $this->logic = new H5KuaiShouLogic($this, 'kuaishou');
        $this->logic->setOriginalUrl($url);
        $this->logic->checkUrlHasTrue();
        $this->logic->setContents();
        return $this->exportData();
    }

    public function setCookie($cookie)
    {
        $this->cookie = $cookie;
        return $this;
    }

    /**
     * @return string
     */
    public function getCookie(): string
    {
        return $this->cookie;
    }


}