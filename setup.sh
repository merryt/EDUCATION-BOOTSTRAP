#!/bin/bash
#

echo Importing DB Schema and Development Data...
mysql -uroot -proot -e"drop schema if exists edubootstrap; create schema edubootstrap"
mysql -uroot -proot edubootstrap < db.sql
echo Ok.
echo

