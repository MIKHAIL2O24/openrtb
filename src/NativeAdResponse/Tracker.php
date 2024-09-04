<?php

namespace OpenRtb\NativeAdResponse;

use OpenRtb\NativeAdResponse\Specification\EventTrackingMethod;
use OpenRtb\NativeAdResponse\Specification\EventTypes;
use OpenRtb\Tools\Exceptions\ExceptionInvalidValue;
use OpenRtb\Tools\Interfaces\Arrayable;
use OpenRtb\Tools\Traits\SetterValidation;
use OpenRtb\Tools\Traits\ToArray;

class Tracker implements Arrayable
{
    use SetterValidation;
    use ToArray;

    protected $event;
    protected $method;
    protected $url;

    /**
     * @param int $event
     * @return Tracker
     * @throws ExceptionInvalidValue
     */
    public function setEvent(int $event): Tracker
    {
        $this->event = $this->validateIn($event,EventTypes::getAll());
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
     * @throws ExceptionInvalidValue
     */
    public function setMethod(int $method): Tracker
    {
        $this->method = $this->validateIn($method,EventTrackingMethod::getAll());
        return $this;
    }

    /**
     * @param string $url
     * @return Tracker
     * @throws ExceptionInvalidValue
     */
    public function setUrl(string $url): Tracker
    {
        $this->url = $this->validateString($url);
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