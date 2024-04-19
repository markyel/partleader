FROM node:latest

# Install dependencies
RUN apt-get update && apt-get install -y \
    vim \
    zip \
    unzip \
    curl

# Change current user
USER node

EXPOSE 5173

# https://github.com/vitejs/vite/discussions/3396
CMD ["sh", "-c", "npm install -g npm@10.5.2 && npm run build"]
#  -- --host
