#!/bin/bash
#
# pack the fbforum repository for deployment
#
# usage: ./pack.sh [ branch [ prefix ] ]
#
#        if prefix not given, default is 'fbtest'
#        if branch not given, default is 'master'
#
set -e

if [ -z "$1" ] ; then
	BRANCH=master
else
	BRANCH=$1
fi

TODAY=`date +%Y%m%d`

if [ -z "$2" ] ; then
	PACKFILE="fbtest-${TODAY}-forum-${BRANCH}"
else
	PACKFILE="$2-${TODAY}-forum-${BRANCH}"	
fi

echo "packaging: ${PACKFILE}.tar.gz"
git -c core.autocrlf=false archive --format tar --prefix "${PACKFILE}/" "${BRANCH}" | tar xf -
tar --exclude=".gitignore" -czf "../${PACKFILE}.tar.gz" "${PACKFILE}"
rm -rf "${PACKFILE}"

echo "packaging: ${PACKFILE}.zip"
git -c core.autocrlf=true archive --format tar --prefix "${PACKFILE}/" "${BRANCH}" | tar xf -
zip -x ".gitignore" -q -r "../${PACKFILE}.zip" "${PACKFILE}"
rm -rf "${PACKFILE}"
