#!/bin/sh
DBNAME=newD
DATE=`date +"%Y%m%d"`
SQLFILE=$DBNAME-${DATE}.sql
mysqldump --opt --user=root --password $DBNAME > $SQLFILE
