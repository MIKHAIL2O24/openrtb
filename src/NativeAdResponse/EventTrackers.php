<?php

namespace OpenRtb\NativeAdResponse;

use OpenRtb\Tools\Interfaces\Arrayable;
use OpenRtb\Tools\Traits\ToArray;

class EventTrackers implements Arrayable
{
    use ToArray;
    protected $trackers = [];

    /**
     * @param Tracker $tracker
     * @return $this
     */
    public function addTracker(Tracker $tracker): EventTrackers
    {
        $this->trackers[] = $tracker;

        return $this;
    }


    /**
     * @param Arrayable $trackers
     * @return $this
     */
    public function setTrackers(Arrayable $trackers): EventTrackers
    {
        $this->trackers = $trackers;

        return $this;
    }

    /**
     * @return Arrayable
     */
    public function getTrackers(): Arrayable
    {
        return $this->trackers;
    }
}