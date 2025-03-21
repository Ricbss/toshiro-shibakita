FROM nginx:alpine

# Copia o arquivo de configuração personalizado para o diretório padrão do Nginx
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Exposição da porta padrão do Nginx
EXPOSE 80

# Comando padrão para iniciar o Nginx
CMD ["nginx", "-g", "daemon off;"]
