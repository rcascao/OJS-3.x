"""constants used by PyCounter"""

NS = {
    'SOAP-ENV': "http://schemas.xmlsoap.org/soap/envelope/",
    'sushi': "http://www.niso.org/schemas/sushi",
    'sushicounter': "http://www.niso.org/schemas/sushi/counter",
    'counter': "http://www.niso.org/schemas/counter",
    }

METRICS = {u"JR1": u"FT Article Requests",
           u"JR1 GOA": u"Gold Open Access Article Requests",
           u"BR1": u"Book Title Requests",
           u"BR2": u"Book Section Requests"}
CODES = {
    u"Database": u"DB",
    u"Journal": u"JR",
    u"Book": u"BR",
    u"Title": u"TR",
    u"Platform": u"PR",
    u"Multimedia": u"MR",
    u"Consortium": u"CR",
}

# from http://www.niso.org/workrooms/sushi/registry/
# Not all of these are actually supported by pycounter!
REPORT_DESCRIPTIONS = {
    u'BR1': u'Number of Successful Title Requests by Month and Title',
    u'BR2': u'Number of Successful Section Requests by Month and Title',
    u'BR3': u'Access Denied to Content Items by Month, Title, and Category',
    u'BR4': u'Access Denied to Content Items by Month, Platform, and Category',
    u'BR5': u'Total Searches by Month and Title',
    u'CR1': u'Number of Successful Full-text Journal Article or Book Chapter '
            u'Requests by Month',
    u'CR2': u'Total Searches by Month and Database',
    u'CR3': u'Number of Successful Multimedia Full Content Unit Requests '
            u'by Month and Collection',
    u'DB1': u'Total Searches, Result Clicks, and Record Views by Month and '
            u'Database',
    u'DB2': u'Access Denied by Month, Database, and Category',
    u'JR1': u'Number of Successful Full-Text Article Requests by Month and '
            u'Journal',
    u'JR1GOA': u'Number of Successful Gold Open Access Full-Text Article '
               u'Requests by Month and Journal',
    u'JR1a': u'Number of Successful Full-Text Article Requests from an '
             u'Archive by Month and Journal',
    u'JR2': u'Access Denied to Full Text Articles by Month, Journal, and '
            u'Category',
    u'JR3': u'Number of Successful Item Requests and Turnaways by Month, '
            u'Journal, and Page-Type',
    u'JR3mobile': u'Number of Successful Item Requests by Month, Journal, '
                  u'and Page-Type for usage on a mobile device',
    u'JR4': u'Total Searches Run by Month and Collection',
    u'JR5': u'Number of Successful Full-Text Article Requests by '
            u'Year-of-Publication (YOP) and Journal',
    u'MR1': u'Number of Successful Multimedia Full Content Unit Requests '
            u'by Month and Collection',
    u'MR2': u'Number of Successful Multimedia Full Content Unit Requests by '
            u'Month, Collection, and Item Type',
    u'PR1': u'Total Searches, Result Clicks, and Record Views by Month and '
            u'Platform',
    u'TR1': u'Number of Successful Requests for Journal Full-Text Articles '
            u'and Book Sections by Month and Title',
    u'TR1mobile': u'Number of Successful Requests for Journal Full-Text '
                  u'Articles and Book Sections by Month and Title '
                  u'(formatted for normal browsers/delivered to mobile '
                  u'devices AND formatted for mobile devices/delivered '
                  u'to mobile devices)',
    u'TR2': u'Access Denied to Full-Text Items by Month, Title, and Category',
    u'TR3': u'Number of Successful Item Requests by Month, Title, and '
            u'Page-Type',
    u'TR3mobile': u'Number of Successful Item Requests by Month, Title, '
                  u'and Page-Type (formatted for normal browsers/delivered '
                  u'to mobile devices and for mobile devices/delivered to '
                  u'mobile devices)',
}
