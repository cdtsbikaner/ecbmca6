FROM cdtsbikaner/tanujwebserver:latest
MAINTAINER "cdtsbikaner"
EXPOSE 80 443
CMD [ "/usr/sbin/httpd","-C","FOREGROUND" ]
