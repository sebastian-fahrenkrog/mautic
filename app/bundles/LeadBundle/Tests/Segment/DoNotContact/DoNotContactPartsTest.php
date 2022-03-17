<?php

namespace Mautic\LeadBundle\Tests\Segment\DoNotContact;

use Mautic\LeadBundle\Entity\DoNotContact;
use Mautic\LeadBundle\Segment\DoNotContact\DoNotContactParts;

class DoNotContactPartsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers \Mautic\LeadBundle\Segment\DoNotContact\DoNotContactParts::getChannel
     * @covers \Mautic\LeadBundle\Segment\DoNotContact\DoNotContactParts::getParameterType
     */
    public function testDncBouncedEmail()
    {
        $field             = 'dnc_bounced';
        $doNotContactParts = new DoNotContactParts($field);

        $this->assertSame('email', $doNotContactParts->getChannel());
        $this->assertSame(
            DoNotContact::BOUNCED,
            $doNotContactParts->getParameterType(),
            'Type for dnc_bounced should be bounced'
        );

        $field             = 'dnc_unsubscribed';
        $doNotContactParts = new DoNotContactParts($field);

        $this->assertSame('email', $doNotContactParts->getChannel());
        $this->assertSame(
            DoNotContact::UNSUBSCRIBED,
            $doNotContactParts->getParameterType(),
            'Type for dnc_unsubscribed should be unsubscribed'
        );
    }

    /**
     * @covers \Mautic\LeadBundle\Segment\DoNotContact\DoNotContactParts::getChannel
     * @covers \Mautic\LeadBundle\Segment\DoNotContact\DoNotContactParts::getParameterType
     */
    public function testDncBouncedSms()
    {
        $field             = 'dnc_bounced_sms';
        $doNotContactParts = new DoNotContactParts($field);

        $this->assertSame('sms', $doNotContactParts->getChannel());
        $this->assertSame(
            DoNotContact::BOUNCED,
            $doNotContactParts->getParameterType(),
            'Type for dnc_bounced_sms should be bounced'
        );

        $field             = 'dnc_unsubscribed_sms';
        $doNotContactParts = new DoNotContactParts($field);

        $this->assertSame('sms', $doNotContactParts->getChannel());
        $this->assertSame(
            DoNotContact::UNSUBSCRIBED,
            $doNotContactParts->getParameterType(),
            'Type for dnc_unsubscribed_sms should be unsubscribed'
        );
    }
}
