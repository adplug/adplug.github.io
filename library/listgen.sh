#!/bin/sh
#
# This script generates a new AdPlug AdLib file formats library
# entry listing for the whole library.
#
# Copyright (c) 2002 Simon Peter <dn.tlp@gmx.net>

# Configuration variables

DB_PATTERN=db/*.txt
DB_LIST=list.php

#################################################################

GetEntry ()
{
    read filename
    read flags
    read extension
    read desc

    cat >>${DB_LIST} <<EOF
<tr><td><pre>${flags}</pre></td><td><pre>${extension}</pre></td>
<td><a href="entry.php?file=${db_file}">${desc}</a></td></tr>

EOF
}

# Write list header
cat >${DB_LIST} <<EOF
<table>
<tr><td><pre><b>A DEPMS</b></pre></td><td><b>Extension</b></td>
<td><b>File Format</b></td></tr>

EOF

# Make list of all database files in directory
for db_file in ${DB_PATTERN} ; do
    GetEntry < ${db_file}
done

# Write list footer
echo "</table>" >>${DB_LIST}
