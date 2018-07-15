This is an multi-container example with postgres database and node.js in the backend and an python flask container in the middle layer that response to the frontend php requests. The frontend php will communicate with backend express server via the private network with embedded DNS server and display the list of apparels.

At the service level, the custom networks were configured allow us to specifically connect services to each other, to create more privileged and secure access between containers in the applications.


It demostrates the use of Docker Compose feature which allows creation of multi-container for our full-stack application.

## Run the example

1. `$ docker-compose up`
2. Open browser and navigate to http://localhost:5000/ 


## Useful Commands

### docker-compose.yml

#### Volumes

Have a volume key per service.

Connect a Docker host directory to a container directory, by joining them with a colon.

Example: ./dockerhostdir:/containerdir

#### Networks

Declare networks at the bottom of the file.

Specify each service’s network(s) with the networks option for each service.