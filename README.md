
# Usage
Start a container with:

    docker run -d --name cockpit -p 8080:80 agentejo/cockpit


# Build  
docker build -t ucekmez/apiengine .


# Run
docker run -p 8080:80 ucekmez/apiengine

# Cleanup
docker rmi $(docker images -f "dangling=true" -q) ucekmez/apiengine -f
