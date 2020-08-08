FROM nginx:stable

# Bibliotecas certbot
RUN apt-get update && \
    apt-get install -y software-properties-common && \
    add-apt-repository ppa:certbot/certbot && \
    apt-get update

EXPOSE 80
EXPOSE 443

ENTRYPOINT [ "nginx" ]

CMD [ "-g", "daemon off;" ]