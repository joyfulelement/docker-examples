FROM node
COPY package.json package.json
RUN npm install # leverage layer ordering cache system: will run ONLY when package.json file is changed
COPY ./app ./app
CMD [ "node", "app/server.js" ]