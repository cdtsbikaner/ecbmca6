FROM nginx:latest
MAINTAINER "cdtsbikaner"
COPY ./html /usr/share/nginx/html	
EXPOSE 80 443

