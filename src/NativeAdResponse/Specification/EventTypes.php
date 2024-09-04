<?php

namespace OpenRtb\NativeAdResponse\Specification;

use OpenRtb\Tools\Traits\GetConstants;

class EventTypes
{
    use GetConstants;
    public const EVENT_IMPRESSION       = 1;
    public const EVENT_VIEWABLE_MRC50   = 2;
    public const EVENT_VIEWABLE_MRC100  = 3;
    public const EVENT_VIEWABLE_VIDEO50 = 4;
}