#!/bin/sh
#
# Fetch AdPlug latest news items.

GROUP_ID=28079
LIMIT=3
FLAT=1
SHOW_SUMMARIES=1

OUTPUT=/home/groups/a/ad/adplug/htdocs/news.html
SOURCE="http://sourceforge.net/export/projnews.php?\
group_id=${GROUP_ID}&limit=${LIMIT}&flat=${FLAT}&show_summaries=${SHOW_SUMMARIES}"

/usr/bin/wget -q -O ${OUTPUT} ${SOURCE}
