<?php

namespace OpenRtb\NativeAdResponse;

use OpenRtb\Tools\Interfaces\Arrayable;
use OpenRtb\Tools\Traits\ToArray;

class Tracker implements Arrayable
{
    use ToArray;

    protected $event;
    protected $method;
    protected $url;

    /**
     * @param int $event
     * @return Tracker
     */
    public function setEvent(int $event): Tracker
    {
        $this->event = $event;
        return $this;
    }

    /**
     * @return int
     */
    public function getEvent(): int
    {
        return $this->event;
    }

    /**
     * @param int $method
     * @return Tracker
     */
    public function setMethod(int $method): Tracker
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @param string $url
     * @return Tracker
     */
    public function setUrl(string $url): Tracker
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}