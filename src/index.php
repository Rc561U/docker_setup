<?php 

$connection = mysqli_connect('mysql', 'root', 'root');

$connection->query('CREATE DATABASE `docker`');