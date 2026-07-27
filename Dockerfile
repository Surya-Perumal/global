# Use an official PHP image with FPM and Nginx/Caddy.
# A popular pattern is a multi-stage build or using a prebuilt image that runs Caddy + PHP.
# Alternatively, Railway natively supports Nixpacks, which sets up PHP + Nginx for you. 
# If you explicitly want Caddy, here is a Dockerfile using Caddy and PHP-FPM:

FROM caddy:2.7-alpine AS caddy

FROM php:8.2-fpm-alpine
# Copy Caddy from the official image
COPY --from=caddy /usr/bin/caddy /usr/bin/caddy

# Install necessary PHP extensions (e.g., pdo_mysql if needed)
RUN docker-php-ext-install pdo pdo_mysql

# Set working directory
WORKDIR /app

# Copy project files to the container
COPY . /app

# Copy the Caddyfile
COPY Caddyfile /etc/caddy/Caddyfile

# Expose port 80 for Railway
EXPOSE 80

# Start both PHP-FPM and Caddy
CMD caddy start --config /etc/caddy/Caddyfile --adapter caddyfile && php-fpm
