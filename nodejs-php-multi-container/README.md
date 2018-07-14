This is an multi-container example with node.js in the backend and php on the frontend. The frontend php will communicate with backend express server via the private network with embedded DNS server and display the list of players.

It demostrates the use of Docker Compose feature which allows creation of multi-container for our full-stack application.

## Run the example

1. `$ docker-compose up`
2. Open browser and navigate to http://localhost:5000/ 


## Useful Commands

### Docker Networking

#### List docker networks

`docker network ls`

#### Inspect a docker network

Usage: `docker network inspect <network name>`

Example: `docker network inspect bridge`

#### Create a docker network

Usage: `docker network create <network name>`

Example: `docker network create privatenw`

#### Run a container with a custom docker network:

Usage: `--network=<network name>`

Example: `docker run --network=privatenw -it --name=goo busybox`

### Docker Compose

#### Start a compose application

At the root (where docker-compose.yml is located): `docker-compose up`

Start a compose application and rebuild images:

`docker-compose up --build`

### docker-compose.yml

#### Version

Current version is 3. So at the top of the file, specify: version: ‘3’

#### Services with builds

Have a services key in the file. List out services one indent at a time.

#### Dependencies

Use the depends_on key and specify dependencies with a list. Each container dependency is marked by a dash, such as: -backend