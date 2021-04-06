<?php
namespace ReportPortalBasic\Enum;

/**
 * Enum describes report portal items' statuses.
 *
 * @author Mikalai_Kabzar
 */
class ItemStatusesEnum
{
    const PASSED = 'PASSED';

    const FAILED = 'FAILED';

    const STOPPED = 'STOPPED';

    const SKIPPED = 'SKIPPED';

    const CANCELLED = 'CANCELLED';

    const INTERRUPTED = 'INTERRUPTED';

    const INFO = 'INFO';

    const WARN = 'WARN';
}
