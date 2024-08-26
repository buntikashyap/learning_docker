<?php

$arr = [
    'docker pull hello-world', // This will fetch the image from docker hub.
    'docker run hello-world', // This will start the container,
    'docker run -it ubuntu', // This is also start the container if not find in local then it will download the image also it will go to the directory
    'docker image ls', // to show images like php node
    'docker ps', // to show containers
    'docker stop #container_id#', // to stop containers
    'docker build .', // This will show the image id
    'docker run -d -p 3000:3000 #image_id#', // This will run the image
    'docker run -d --rm -p 3001:3000  #image_id#', // This will terminate the container as well as it will stop
    'docker run -d --rm --name "mywebapp" -p 3001:3000  #image_id#',
    'docker build -t mywebapp:01 .',
    'docker rmi mywebapp:02',
    'docker run python:latest',
    'docker run -it #image_id#', // this will run the for the client taking input from terminal,
    'docker login',

];
    

// Docker vs Virtual machine
/*
    1. System dependency : Hardware, Host OS kernel, Application layers (application)
    2. Docker use the system kernel while VM have it's kernel
    3. Docker only virtualize Applications also kernel virtualize the application as well as kernel. That's why docker is light weight and VM can be heavy in size


*/