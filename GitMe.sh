#!/bin/sh
# Last edited on 3/11/14 by Cole
# Purpose: Simple git pull to update the local code
/usr/bin/git pull
chown -R apache:apache /Website
