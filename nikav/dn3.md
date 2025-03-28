# Services installation

apache2 php libapache2-mod-php php-mysql mysql-server

# MySQL setup

1. create database 'sample_db'
2. fill it with dummy data

# Apache vhosts setup

000-default.conf -> set documentroot to racunalnistvo-v-oblaku/nikav

# PHP api

Connects to database, retrieves all users and their email addresses.

# index.php

Uses alpine.js to fetch and display retrieved data.

# Misc

VPS IP: 3.71.91.224
