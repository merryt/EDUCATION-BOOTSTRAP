#!/bin/bash
#

echo Importing DB Schema and Development Data...
mysql -uroot -proot edubootstrap < db.sql
echo Ok.
echo

